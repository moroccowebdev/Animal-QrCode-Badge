<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnimalQrCode extends Controller
{
    
    public function findQrId($id)
    {
        function checkId(string $id): bool {
            $pattern = '/^ma\d+/';
            return preg_match($pattern, $id) === 1;
        }
        if ( checkId($id) ) {
            $animal = Animal::where('qr_id', '=', $id)->first();
            if ($animal) {
                return view('animalProfile', compact('animal'));
            }else {
                return view('animals.create', compact('id'));
            }
            } else {
                return redirect()->back()->with('error', 'There is no Qr_id like that');
        }
        
    }

    public function AddAnimal(Request $request)
    {
        
        // validate incoming data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'cpassword' => 'required',
            'phone' => 'required',
            'animal' => 'required',
            'adress' => 'required',
            'profile' => 'required'
        ]);
        // changing profile name if it's exist
        $profile = Str::random(10) .'.'. $request->file('profile')->getClientOriginalExtension();
        // store image in storage foalder
        $request->profile->storeAs('animals', $profile, 'public');
        
        if ($request->password == $request->cpassword) {
            // get all data in $user
            $animal = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'animal' => $request->animal,
                'adress' => $request->adress,
                'profile' => $profile,
                'qr_id' => $request->qr_id,
            ];
            // $user = [
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'password' => Hash::make($request->password)
            // ];
            // add data to Animal Table 
            Animal::create($animal);

            // add data to user Table
            // User::create($user);

            return view('animalProfile', compact('animal'))->with('success', 'your animal was created successfully');

        }else {
            return redirect()->back()->with('error', 'the password does not match!!');
        }
    }
}
