<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestInformation;
use App\Mail\DownloadBrochure;
use App\Mail\SendRequest;
use App\Models\Contact;
use App\Repository\PropertyRepository;
use App\Services\RecaptchaService;
use Google\ApiCore\ValidationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
     * @throws ValidationException
     */
    public function downloadBrochure(Request $request): RedirectResponse
    {
        //1. récupère la captcha depuis l'api google recaptcha
        $recaptcha = $this->recaptchaService->create_assessment( $request->get('g-recaptcha-response') );

        //2. test valeur captcha
        if($recaptcha['score'] > 0.7) {

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

        return back()->with(['failed' => 'something went wrong']);
    }

    /**
     * Gère l'envoie du formulaire de contact
     * @param RequestInformation $request
     * @return RedirectResponse
     * @throws \Google\ApiCore\ValidationException
     */
    public function sendRequest(RequestInformation $request): RedirectResponse
    {
        //1. récupère la captcha depuis l'api google recaptcha
        $recaptcha = $this->recaptchaService->create_assessment( $request->get('g-recaptcha-response') );

        //2. test le score de la captcha
        if($recaptcha['score'] > 0.7){

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


            }
        }

        return back()->with(['failed' => 'something went wrong']);
    }
}
