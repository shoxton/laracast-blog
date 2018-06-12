<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
    
    public function create() {

        return view('registration.create');

    }

    public function store() {

        //Validate

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //Create and save the user

        $user = User::create([ 
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        //Sign in the user

        auth()->login($user);

        \Mail::to($user)->send( new Welcome($user));

        session()->flash('message', 'Welcome to My Blog, ' . $user->name . '!');

        //Redirects the user to the home page

        return redirect()->home(); 

    }


}
