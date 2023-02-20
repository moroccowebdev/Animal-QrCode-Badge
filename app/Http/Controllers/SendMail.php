<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMail extends Controller
{
    public function sendEmail(User $user)
    {
        Mail::to($user->email)->send(new ForgotPassword($user));
    }
}
