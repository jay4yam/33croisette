<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestInformation;
use App\Mail\SendRequest;
use App\Repository\PropertyRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(private PropertyRepository $propertyRepository)
    {}

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index():View
    {
        $properties = $this->propertyRepository->getProperties();

        return view('welcome', compact('properties'));
    }


    public function sendRequest(RequestInformation $request)
    {
        try{
            Mail::to('lea@michaelzingraf.com')
                ->bcc('team-marketing@michaelzingraf.com')
                ->send(new SendRequest($request->all()));
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
        }
        return 'merci';
    }
}
