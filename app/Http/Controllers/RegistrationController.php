<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }

    public function store(Request $request) {

        //validate the form

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        //create user

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        //login registered user

        auth()->login($user);

        //redirect to home once logged in

        return redirect('books');
    }
}
