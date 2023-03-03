<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SurveyEksekutifController;

Route::controller(SurveyEksekutifController::class)->group(function () {
    Route::get('/', 'form')->name('tulip.form');
    Route::post('/action', 'action')->name('tulip.action');
});
Route::controller(ReportController::class)->group(function () {
    Route::get('/report/tulip', 'tulip')->name('report.tulip.form');
    Route::post('/report/tulip', 'tulipResult')->name('report.tulip.result');
});
Route::view('/admin', 'admin');