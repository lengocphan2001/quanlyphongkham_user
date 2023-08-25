<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;


// You should define here your routes
Route::group(['as' => 'ajax.'], function () {
    Route::get('ajax-content', [AjaxController::class, 'content'])->name('content');
});
