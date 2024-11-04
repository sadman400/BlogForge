<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function dashboard (Request $request) {
        $posts = Auth::user()->posts()->latest()->paginate(2);

        return view('admin.dashboard', ['posts' => $posts]);
    }
}
