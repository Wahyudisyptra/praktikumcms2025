<?php
use App\Http\Controllers\MataKuliahController;

Route::get('/', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::resource('matakuliah', MataKuliahController::class)->except(['index']);
