<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    public function login(User $user)
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return to_route('users.index');
        }

        return redirect()->back()->with('Error', 'Email or password is invalid');
    }
    public function store(Request $request)
    {

        // validate incoming data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'cpassword' => 'required',
        ]);
        // changing profile name if it's exist
        $profile = Str::random(10) .'.'. $request->file('profile')->getClientOriginalExtension();
        // store image in storage foalder
        $request->profile->storeAs('users_profile', $profile, 'public');

        if ($request->password == $request->cpassword) {
            // get all data in $data
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            // add data to database
            User::create($data);
            return to_route('login')->with('success', 'User created Successfully');
        }else {
            return redirect()->back()->with('error', 'the password does not match!!');
        }
        return to_route('login')->with('error', 'You already have an account!!');
    }
}
