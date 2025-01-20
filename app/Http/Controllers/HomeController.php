<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestInformation;
use App\Mail\SendRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index():View
    {
        return view('welcome');
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
