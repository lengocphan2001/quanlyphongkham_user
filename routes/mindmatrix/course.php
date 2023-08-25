<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'courses.'], function () {
    Route::get('courses', [CourseController::class, 'index'])->name('all');
    Route::get('{alias}', [CourseController::class, 'getCourse'])->name('detail');
});


