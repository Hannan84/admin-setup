<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
});

Route::get('/profile', function () {
    return view('backend.profile.profile');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/data', [UserController::class, 'getUsers'])->name('users.data');

