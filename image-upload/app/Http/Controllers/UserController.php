<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile() {
        return view('profile', [
            'user' => Auth::user(),
        ]);
    }

    public function  updateAvatar(Request $request) {
        // User added avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');

            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            $avatar = Storage::putFileAs(
                'uploads/avatars', $avatar, $filename,
            );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', [
            'user' => Auth::user(),
        ]);
    }

}
