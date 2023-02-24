<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyEksekutifController;


Route::controller(SurveyEksekutifController::class)->group(function () {
    Route::get('/', 'form')->name('tulip.form');
    Route::post('/action', 'action')->name('tulip.action');
});
// Route::view('/', 'tulip/index');
