<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id) {
        $user = User::findOrFail($id);

        // $comments = News::find(123)->with('comments');

        // $phone = Phone::find
        // var_dump($user->phone->model);
        return view('show', [
            'user' => $user,
            'phone' => $user->phone,
        ]);
    }
}
