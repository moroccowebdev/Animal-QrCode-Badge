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
            //-=-= Start check admin -=-=-=-=-=-=
            $user = User::where('email','=',$credentials['email'])->first();
            if($user['admin'] == 1){
                return to_route('/')->with('check-admin',1);
            }else{
                return to_route('/')->with('check-admin',0);
            }
            //-=-= End check admin -=-=-=-=-=-=--=-
            // return to_route('/');
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
