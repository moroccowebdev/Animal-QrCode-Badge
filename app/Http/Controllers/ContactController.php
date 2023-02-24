<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
// use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request){
        $details = [
            'first-name' => $request->firstName,
            'last-name' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        FacadesMail::to($request->email)->send(new ContactMail($details));
        return back()->with('message_sent','Your Message has been sent successfully!');
    }
}
