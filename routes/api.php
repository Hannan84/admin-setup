<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Tymon\JWTAuth\Http\Middleware\Authenticate as JwtAuth;

// Public Routes with Throttle
Route::middleware('throttle:3,1')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

// Protected Routes with JWT and optional throttle
Route::middleware([
    JwtAuth::class,
    'throttle:60,1', // optional rate limit for authenticated users
])->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

