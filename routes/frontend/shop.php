<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'checkout.', 'prefix' => 'checkout'], function () {
    Route::get('customer', [CheckoutController::class, 'customer'])->name('customer');
    Route::get('shipping', [CheckoutController::class, 'shipping'])->name('shipping');
    Route::get('payment', [CheckoutController::class, 'payment'])->name('payment');
    Route::get('confirmation', [CheckoutController::class, 'confirmation'])->name('confirmation');
});
