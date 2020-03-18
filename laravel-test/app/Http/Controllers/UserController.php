<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show All Users
    public function showAllUsers() {
        return view('users/index', ['user' => User::all()]);
    }
}
