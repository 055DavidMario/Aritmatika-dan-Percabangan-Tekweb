<?php

use App\Http\Controllers\DeretController;
use App\Http\Controllers\SecantController;
use App\Http\Controllers\KalkulatorController;
use Illuminate\Support\Facades\Route;

// Route standar menampilkan menu awal
Route::get('/', function () {
    return view('home');
});

// Route method GET dan POST perhitungan Deret Bilangan
Route::get('/deret', [DeretController::class,'index'])->name('aritmatika');
Route::post('/deret', [DeretController::class,'hitung'])->name('aritmatika');

// Route method GET dan POST perhitungan Kalkulator
Route::get('/kalkulator', [KalkulatorController::class,'index'])->name('kalkulator');
Route::post('/kalkulator', [KalkulatorController::class,'hitung'])->name('kalkulator');