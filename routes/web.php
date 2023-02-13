<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyEksekutifController;

Route::controller(SurveyEksekutifController::class)->group(function () {
    Route::get('/{id?}', 'form')->name('tulip.form');
    Route::post('/{id?}', 'action')->name('tulip.action');
});
