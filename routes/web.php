<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SurveyEksekutifController;

Route::view('/', 'tulip/index');

// Route::controller(SurveyEksekutifController::class)->group(function () {
//     Route::get('/', 'form')->name('tulip.form');
//     Route::post('/', 'action')->name('tulip.action');
// });
