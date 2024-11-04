<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/posts');

// resources controller
Route::resource('posts', PostController::class);

Route::get('{user}/posts', [AdminController::class, 'userPosts'])->name('user.posts');


// register & login routes
Route::middleware('guest')->group(function () {
    // register routes
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    // login routes
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});




// dashboard & logout routes
Route::middleware('auth')->group(function () {
    // dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // logout
    Route::get('/logout', function () {
        return view('auth.login');
    })->name('logout');
    Route::post('/logout', [AuthController::class, 'logout']);
});
