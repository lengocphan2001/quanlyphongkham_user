<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

/*
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::group(['as' => 'auth.'], function () {

    // Authentication
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    // Registration
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'register']);

    // Password Reset
    Route::get('password/reset', [AuthController::class, 'reset'])->name('password.request');
    Route::post('password/reset', [AuthController::class, 'reset'])->name('password.update');

    // Logout
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

});
