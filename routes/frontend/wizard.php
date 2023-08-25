<?php

use App\Http\Controllers\WizardController;
use Illuminate\Support\Facades\Route;


// You should define here your routes
Route::group(['as' => 'wizard.', 'prefix' => 'wizard'], function () {
    Route::get('step-1', [WizardController::class, 'step1'])->name('step1');
    Route::get('step-2', [WizardController::class, 'step2'])->name('step2');
    Route::get('step-3', [WizardController::class, 'step3'])->name('step3');
    Route::get('step-4', [WizardController::class, 'step4'])->name('step4');

    // Forms
    Route::get('form-1', [WizardController::class, 'form1'])->name('form1');
    Route::get('form-2', [WizardController::class, 'form2'])->name('form2');
    Route::get('form-3', [WizardController::class, 'form3'])->name('form3');
    Route::get('form-4', [WizardController::class, 'form4'])->name('form4');
    Route::get('form-5', [WizardController::class, 'form5'])->name('form5');

    //
    Route::post('post-form', [WizardController::class, 'post'])->name('post');
});
