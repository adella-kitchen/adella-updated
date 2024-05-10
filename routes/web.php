<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KaryawanController;
use App\Http\Controllers\admin\ManajemenBahanController;
use App\Http\Controllers\admin\ManajemenKontenController;
use App\Http\Controllers\admin\ManajemenMenuController;
use App\Http\Controllers\admin\PesananController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/manajemen-bahan', [ManajemenBahanController::class, 'index']);
    Route::get('/manajemen-bahan/{id}', [ManajemenBahanController::class, 'index']);
    Route::get('/manajemen-menu', [ManajemenMenuController::class, 'index']);
    Route::post('/manajemen-menu/tambahmenu', [ManajemenMenuController::class, 'index']);
    Route::get('/manajemen-menu/{id}', [ManajemenMenuController::class, 'index']);
    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/karyawan', [KaryawanController::class, 'index']);
    Route::get('/manajemen-konten', [ManajemenKontenController::class, 'index']);
});