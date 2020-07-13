<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all()->where('email', '!=', 'admin@mail.com');
        return view('users.index', ['users' => $users]);
    }

    public function manageEditors($id) {
        $user = User::find($id);
        $user->editor = !$user->editor;
        $user->save();
        $users = User::all();
        return redirect('users')->with('users', $users);
    }
}
