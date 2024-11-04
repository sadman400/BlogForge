<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // dashboard function
    function dashboard (Request $request) {
        $posts = Auth::user()->posts()->latest()->paginate(2);
        return view('admin.dashboard', ['posts' => $posts]);
    }


    // posts details function
    function userPosts (User $user) {

        $posts = $user->posts()->latest()->paginate(3);

        return view('admin.posts', ['posts' => $posts]);
    }
}
