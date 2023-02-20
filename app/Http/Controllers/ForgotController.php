<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotController extends Controller
{
    public function resetPassword()
    {
        return view('auth.reset');
    }
    // send email To the user for resend the password
    public function sendEmail(Request $request)
    {
        $email = $request->email;
        $users = User::all();
        
        foreach ($users as $user) {
            if ($email === $user->email) {
                Mail::to($user->email)->send(new ForgotPassword($user));
                return redirect()->back()->with('success' , 'Email Sended Successfully');
            }
        }
        return redirect()->back()->with('error', 'Whoops! Something went wrong!');
    }
    // rettrns the view 
    public function Change_view(Request $request, $user)
    {
        return view('auth.changePassword', compact('user'));
    }

    public function ChangePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
            'Cpassword' => 'required'
        ]);
        $user = User::findOrFail($id);
        
        // Confirm Password
        if ($request->password == $request->Cpassword) {
            $user->update(['password' => Hash::make($request->password)]);
            return to_route('login')->with('success' , 'Password Changed Successfully');
        }else {
            return redirect()->back()->with('error' , "Invalid password");
        }
    }


}
