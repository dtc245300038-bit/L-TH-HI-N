<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Trang đăng nhập
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Xử lý đăng nhập
Route::post('/login', [AuthController::class, 'login']);

// Đăng xuất
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Trang Admin
Route::get('/admin', function () {
    return 'Chào mừng Admin!';
})->middleware('auth');

// Trang Dashboard
Route::get('/dashboard', function () {
    return 'Chào mừng bạn đến CRM!';
})->middleware('auth');
