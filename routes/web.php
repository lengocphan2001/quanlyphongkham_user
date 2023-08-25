<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Docs Routes
 */

/**
 * Mindmatrix Routes
 */
Route::group(['as' => 'mindmatrix.'], function () {
    include(__DIR__.'/mindmatrix/home.php');
    include(__DIR__.'/mindmatrix/about-us.php');
    include(__DIR__.'/mindmatrix/blogs.php');
    include(__DIR__.'/mindmatrix/review.php');
    include(__DIR__.'/mindmatrix/course.php');
});


