<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;

Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us');
