<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Arahkan root ke halaman login
Route::get('/', function () {
    return redirect('/login');
});

// Login routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'process'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');

// Group route yang perlu login
Route::middleware('auth')->group(function () {
    // Halaman home utama
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // CRUD Mata Kuliah
    Route::resource('matakuliah', MataKuliahController::class);

    // Upload gambar
    Route::get('/upload', [ImageController::class, 'create']);
    Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
    Route::delete('/upload/{id}', [ImageController::class, 'destroy'])->name('image.delete');
});
