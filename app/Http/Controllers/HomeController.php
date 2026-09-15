<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestInformation;
use App\Mail\DownloadBrochure;
use App\Mail\SendRequest;
use App\Models\Contact;
use App\Repository\PropertyRepository;
use App\Services\RecaptchaService;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(private PropertyRepository $propertyRepository, private RecaptchaService $recaptchaService)
    {}

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index():View
    {
        $properties = $this->propertyRepository->getProperties();

        return view('home', compact('properties'));
    }

    public function digitalBrochure()
    {
        return view('digital');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function downloadBrochure(Request $request): RedirectResponse
    {
        $this->validateRecaptcha($request, 'download_brochure');

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'source' => ['nullable', 'string', 'max:255'],
            'ip_address' => ['nullable', 'ip'],
        ]);

        try {

            //1. crée le contact en bdd
            Contact::create([
                'source' => $request->source,
                'ip_address' => $request->ip_address,
                'email' => $request->email,
            ]);

            //2. envoie le mail au client au au marketing
            Mail::to($request->email)
                ->bcc(['lea@michaelzingraf.com', 'team-marketing@michaelzingraf.com'])
                ->queue(new DownloadBrochure());

            //3. retour avec message en session
            return back()->with(['brochure_success' => true]);

        } catch (\Exception $exception) {

            Log::error($exception->getMessage());

            return back()->with(['failed' => 'something went wrong']);
        }
    }

    /**
     * Gère l'envoie du formulaire de contact
     * @param RequestInformation $request
     * @return RedirectResponse
     */
    public function sendRequest(RequestInformation $request): RedirectResponse
    {
        $this->validateRecaptcha($request, 'send_request');

        try{

            //3. crée le contact en bdd
            Contact::create([
                'source' => $request->source,
                'ip_address' => $request->ip_address,
                'email' => $request->email,
                'name' => $request->name,
                'phone' => $request->phone,
            ]);

            Mail::to('lea@michaelzingraf.com')
                ->bcc('team-marketing@michaelzingraf.com')
                ->queue(new SendRequest($request->all()));

            return back()->with(['form_success' => true]);

        }catch (\Exception $exception){
            Log::error($exception->getMessage());

            return back()->with(['failed' => 'something went wrong']);

        }
    }

    /**
     * Bloque les soumissions dont le token reCAPTCHA Enterprise est invalide ou trop risqué.
     *
     */
    private function validateRecaptcha(Request $request, string $expectedAction): void
    {
        Validator::make($request->all(), [
            'recaptcha_token' => ['required', 'string'],
            'action' => ['required', 'string', 'in:'.$expectedAction],
        ])->validate();

        $assessment = $this->recaptchaService->create_assessment(
            $request->string('recaptcha_token')->toString(),
            $expectedAction
        );

        if (($assessment['score'] ?? 0) < config('google_recaptcha.minimum_score', 0.5)) {
            throw new HttpResponseException(
                back()
                    ->withErrors(['recaptcha_token' => 'We could not verify that you are human. Please try again.'])
                    ->withInput($request->except('recaptcha_token'))
            );
        }
    }
}
