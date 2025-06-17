<?php

// routes/api.php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserAuthController;
use App\Http\Controllers\Api\UserController;

Route::prefix('user')->group(function () {
    Route::post('/register', [UserAuthController::class, 'register']);
    Route::post('/login', [UserAuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/profile', [UserAuthController::class, 'profile']);
        Route::post('/logout', [UserAuthController::class, 'logout']);


    });
});
