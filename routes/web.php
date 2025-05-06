<?php
use App\Http\Controllers\MataKuliahController;

Route::get('/', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::post('/store', [MataKuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/lihat-jadwal', [MataKuliahController::class, 'show'])->name('matakuliah.show');
