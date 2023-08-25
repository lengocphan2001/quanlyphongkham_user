<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Root route
Route::get('/', [HomeController::class, 'welcome'])->name('index');
