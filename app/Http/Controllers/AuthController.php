<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // register function
    function register(Request $request) {

        $userData = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);
        // create user
        $userInfo = User::create($userData);
        // login
        Auth::login($userInfo);
        // returning our function
        return redirect()->route('home');
    }


    // login function
    function login (Request $request) {

        $validateUser = $request->validate([
            'email' => ['required', 'max:200', 'email'],
            'password' => ['required', 'min:3' ],
        ]);

        // login the user
        if (Auth::attempt($validateUser, $request->remember)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.',
            ]);
        }
    }



    // logout function
    function logout (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('posts.index');
    }
}
