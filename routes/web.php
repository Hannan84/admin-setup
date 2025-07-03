<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/', function () {
//     return view('backend.dashboard.dashboard');
// });

Route::get('/profile', function () {
    return view('backend.profile.profile');
});
