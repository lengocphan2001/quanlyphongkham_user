<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocsController;

// Root route
Route::get('/', [HomeController::class, 'welcome'])->name('index');

// You should define here your routes
Route::group(['as' => 'pages.'], function () {
    Route::get('terms', [HomeController::class, 'terms'])->name('terms');
    Route::get('about', [HomeController::class, 'about'])->name('about');

    /**
     * Define some of the landing pages demos, just to keep the URL in a nice dashed format.
     * If we don't do it this way and keep the {any} the dash won't be possible to use it
     **/
    Route::get('app-landing', [HomeController::class, 'appLanding'])->name('app-landing');
    Route::get('app-landing-2', [HomeController::class, 'appLanding2'])->name('app-landing-2');
    Route::get('automate-social', [HomeController::class, 'automateSocial'])->name('automate-social');
    Route::get('business-solutions', [HomeController::class, 'businessSolutions'])->name('business-solutions');
    Route::get('online-payment', [HomeController::class, 'onlinePayment'])->name('online-payment');
    Route::get('payment-services', [HomeController::class, 'paymentServices'])->name('payment-services');
    Route::get('smart-business', [HomeController::class, 'smartBusiness'])->name('smart-business');
});

/***
 * By convenience, we configured a 'generic' route which will redirect to the specified route.
 * Since all the routes of the template are get, we can do it.
 * Tho you should consider creating your specific routes for your project.
 **/
Route::get('{any}', [HomeController::class, 'any']);
