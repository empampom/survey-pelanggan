<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SurveyEksekutifController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\HakAksesController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PertanyaanController;
use App\Http\Controllers\Admin\KategoriKuisController;

// use App\Http\Controllers\Admin\HomeController;


// Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
// Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login.store');
// Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register');
// Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('login.store');
});
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    
    return redirect('/login');
})->name('logout');



Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
        // route::group()->middleware();
        Route::controller(HakAksesController::class)->middleware('cek_login:hakakses.index')->group(function () {
            Route::get('/hakakses', 'index')->name('hakakses.index');
            Route::get('/hakakses/edit/{id}', 'edit');
            Route::get('/hakakses/delete/{id}', 'delete');
            Route::get('/hakakses/modul_akses/{id}', 'modul_akses');
            Route::post('/hakakses/modul_akses', 'modul_akses_store');
            Route::post('/hakakses/store', 'store');
            Route::post('/hakakses/update', 'update');
        });
        Route::controller(MenuController::class)->middleware('cek_login:menu.index')->group(function () {
            Route::get('/menu', 'index')->name('menu.index');
            Route::get('/menu/edit/{id}', 'edit');
            Route::get('/menu/status/{id}', 'status');
            Route::get('/menu/delete/{id}', 'delete');
            Route::post('/menu/store', 'store');
            Route::post('/menu/update', 'update');
        });
        Route::controller(UserController::class)->middleware('cek_login:user.index')->group(function () {
            Route::get('/user', 'index')->name('user.index');
            Route::get('/user/sync', 'sync');
            Route::get('/user/edit/{id}', 'edit');
            Route::post('/user/update', 'update');
        });
        Route::controller(BagianController::class)->middleware('cek_login:bagian.index')->group(function () {
            Route::get('/bagian', 'index')->name('bagian.index');
            Route::get('/bagian/sync', 'sync');
        });
        Route::controller(ProfesiController::class)->middleware('cek_login:profesi.index')->group(function () {
            Route::get('/profesi', 'index')->name('profesi.index');
            Route::get('/profesi/sync', 'sync');
        });
        Route::controller(PertanyaanController::class)->middleware('cek_login:pertanyaan.index')->group(function () {
            Route::get('/pertanyaan', 'index')->name('pertanyaan.index');
            Route::get('/pertanyaan/edit/{id}', 'edit');
            Route::get('/pertanyaan/delete/{id}', 'delete');
            Route::get('/pertanyaan/modul_akses/{id}', 'modul_akses');
            Route::post('/pertanyaan/detail', 'detail');
            Route::post('/pertanyaan/store', 'store');
            Route::post('/pertanyaan/update', 'update');
        });

        Route::controller(KategoriKuisController::class)->middleware('cek_login:kategori_kuis.index')->group(function () {
            Route::get('/kategori_kuis', 'index')->name('kategori_kuis.index');
            Route::get('/kategori_kuis/sync', 'sync');
            Route::post('/kategori_kuis/store', 'store');
            Route::post('/kategori_kuis/update', 'update');
            Route::get('/kategori_kuis/edit/{id}', 'edit');
            Route::get('/kategori_kuis/delete/{id}', 'delete');
        });
    });
});

Route::controller(SurveyEksekutifController::class)->group(function () {
    Route::get('/', 'form')->name('tulip.form');
    Route::get('/{jenis}/{id}', 'kuis')->name('kuis');
    // Route::get('/ranap/{id}', 'ranap')->name('tulip.ranap');
    // Route::post('/action', 'action')->name('tulip.action');
});
Route::controller(ReportController::class)->group(function () {
    Route::get('/report/tulip', 'tulip')->name('report.tulip.form');
    Route::post('/report/tulip', 'tulipResult')->name('report.tulip.result');
});
// Route::view('/admin', 'admin');
