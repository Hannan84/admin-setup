<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Tymon\JWTAuth\Http\Middleware\Authenticate as JwtAuth;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserController;

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

    // Role and Permission Management
    Route::post('/users/{userId}/assign-role', [RolePermissionController::class, 'assignRole']);
    Route::post('/users/{userId}/give-permission', [RolePermissionController::class, 'givePermission']);
    Route::get('/users/{userId}/roles-permissions', [RolePermissionController::class, 'showRolesPermissions']);
    Route::middleware(['role:admin'])->get('/admin-only', [UserController::class, 'adminOnlyUsers']);
});

Route::middleware('test')->get('/check', fn() => 'works'); // Example route to test custom middleware


