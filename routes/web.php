<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;

// route default
Route::get('/', function () {
    return view('welcome');
});

// routes PBL Perpustakaan Digital
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/product', [BukuController::class, 'index']);