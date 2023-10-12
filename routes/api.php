<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\userController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [StaffController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('makeuser', [UserController::class, 'makeuser']);

    Route::get('/dashboard', function () {
        return response()->json(['redirect' => 'http://http://localhost:3000/dashboard']);
    })->name('dashboard');
