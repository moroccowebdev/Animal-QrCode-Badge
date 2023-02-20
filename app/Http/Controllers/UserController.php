<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate incoming data
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'profile' => 'accepted|mimes : png,jpeg,jpg | max : 2024'
        ]);
        // changing profile name if it's exist
        if ($request->has('profile')) {
            // changing profile name if it's exist
            $profile = Str::random(10) .'.'. $request->profile->getClientOriginalExtension();
            // store image in storage foalder
            $request->profile->storeAs('users_profile', $profile, 'public');
        }
        
        // get all data in $data
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'profile' => $profile
        ];
        // add data to database 
        User::create($data);
        return to_route('login')->with('success', 'User created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user){ 
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // validate incoming data
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'profile' => 'accepted|mimes : png,jpeg,jpg | max : 2024'
        ]);

        // changing profile name if it's exist
        if ($request->has('profile')) {
            // changing profile name if it's exist
            $profile = Str::random(10) .'.'. $request->profile->getClientOriginalExtension();
            // store image in storage foalder
            $request->profile->storeAs('users_profile', $profile, 'public');
        }

        // get all data in $data
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'profile' => $profile
        ];
        //update icomming data
        $user->update($data);
        return to_route('admin.users')->with('success', 'User updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('admin.users')->with('success', 'User deleted Successfully');
    }
}
