<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SinhVienController;
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [ PageController::class, 'showHomepage']);
//Route::get('/about', [ PageController::class, 'showHomepage']);

Route::get('/', [ SinhVienController::class, 'index'])->name('sinh-vien.index');
Route::get('/sinhvien', [ SinhVienController::class, 'index'])->name('sinh-vien.index');
Route::post('/sinhvien', [ SinhVienController::class, 'store'])->name('sinh-vien.store');
