<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk halaman welcome
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome')->middleware('guest');

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

// Rute kegiatan yang memerlukan autentikasi dan admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/kegiatan', [KegiatanController::class, 'index'])->name('admin.kegiatan.index');
    Route::get('/admin/kegiatan/create', [KegiatanController::class, 'create'])->name('admin.kegiatan.create');
    Route::post('/admin/kegiatan', [KegiatanController::class, 'store'])->name('admin.kegiatan.store');
    Route::get('/admin/kegiatan/{id}', [KegiatanController::class, 'show'])->name('admin.kegiatan.show');
    Route::get('/admin/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('admin.kegiatan.edit');
    Route::put('/admin/kegiatan/{id}', [KegiatanController::class, 'update'])->name('admin.kegiatan.update');
    Route::delete('/admin/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('admin.kegiatan.destroy');
});
