<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestInformation;
use App\Mail\DownloadBrochure;
use App\Mail\SendRequest;
use App\Repository\PropertyRepository;
use App\Services\RecaptchaService;
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

        return view('welcome', compact('properties'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function downloadBrochure(Request $request): \Illuminate\Http\RedirectResponse
    {
        try{
            Mail::to($request->email)
                ->bcc(['lea@michaelzingraf.com','team-marketing@michaelzingraf.com'])
                ->queue(new DownloadBrochure());

        }catch (\Exception $exception){
            Log::error($exception->getMessage());
        }
        return back()->with(['brochure_success' => true]);
    }


    public function sendRequest(RequestInformation $request)
    {
        $recaptcha = $this->recaptchaService->create_assessment( $request->get('g-recaptcha-response') );

        if($recaptcha['score'] > 0.7){
            try{
                Mail::to('lea@michaelzingraf.com')
                    ->bcc('team-marketing@michaelzingraf.com')
                    ->queue(new SendRequest($request->all()));

            }catch (\Exception $exception){
                Log::error($exception->getMessage());
            }
        }

        return back()->with(['form_success' => true]);
    }
}
