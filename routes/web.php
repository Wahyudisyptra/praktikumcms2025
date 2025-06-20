<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthController;

// Redirect root ke halaman matakuliah
Route::redirect('/', '/matakuliah');

// Login routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'process'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Route untuk upload gambar
Route::get('/upload', [ImageController::class, 'create']);
Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
Route::delete('/upload/{id}', [ImageController::class, 'destroy'])->name('image.delete');

// Group route yang perlu login
Route::middleware('auth')->group(function () {
    // Route untuk CRUD mata kuliah
    Route::resource('matakuliah', MataKuliahController::class);

});
