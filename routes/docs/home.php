<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;

/**
 * Define the Docs route
 **/
Route::get('docs', [DocsController::class, 'index'])->name('index');
