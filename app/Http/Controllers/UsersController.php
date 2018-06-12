<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

class UsersController extends Controller
{

    public function __construct() {

        $this->middleware('auth')->except(['index', 'show']);

    }

    public function index() {

        $users = User::all();

        return view('users.index', compact('users'));

    }

    public function show(User $user) {

        $posts = $user->posts()->latest()->get();

        return view('users.show', compact('user', 'posts'));

    }

    public function update() {

        return view('users.update');

    }
}
