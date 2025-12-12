<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController; // jangan lupa import

Route::get('/', function () {
    return view('home');
});

// Route login/logout
Route::get('/admin/login', [AuthController::class, 'showLogin']);
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login'); 
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Route dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// Route CRUD Produk di dalam middleware auth + admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    // Produk CRUD
    Route::get('produk', [ProdukController::class, 'index'])->name('admin.produk');
    Route::post('produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::post('produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');

});
