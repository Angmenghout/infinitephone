<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        return view('dashboard.role')->with([
            'users' => $users
        ]);
    }
}
