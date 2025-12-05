<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('home');
});

// Halaman promo
Route::get('/promo', function () {
    return view('promo');
});

// Halaman product
Route::get('/product', function () {
    return view('product');
});

// ==============================
// 🔐 Login Admin
// ==============================
Route::get('/admin/login', function () {
    return view('admin.login'); // file resources/views/admin/login.blade.php
})->name('admin.login');

// Post login (nanti ke controller)
Route::post('/admin/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])
    ->name('admin.login.post');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
