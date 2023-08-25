<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'blogs.', 'prefix' => 'blogs'], function () {
    Route::get('', [PostController::class, 'getPosts'])->name('all');
    Route::get('{alias}', [PostController::class, 'getPost'])->name('post-detail');
});
