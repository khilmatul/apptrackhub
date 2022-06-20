<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TrayekController;
use App\Http\Controllers\AngkutanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenumpangController;


Route::get('/', function () {
    return view('beranda');
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
})->middleware('auth');


Route::resource('penumpang', PenumpangController::class);
// export PDF
Route::get('eksportpenumpang', [PenumpangController::class, 'eksportpenumpang'])->name('eksportpenumpang');

Route::resource('angkutan', AngkutanController::class);
// export PDF
Route::get('eksportangkutan', [AngkutanController::class, 'eksportangkutan'])->name('eksportangkutan');

Route::resource('trayek', TrayekController::class);
// export PDF
Route::get('eksporttrayek', [TrayekController::class, 'eksporttrayek'])->name('eksporttrayek');
