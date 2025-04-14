<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show']);

Route::post('/matakuliah/daftar', [MatakuliahController::class, 'daftar']);
Route::post('/matakuliah/dosen', [MatakuliahController::class, 'dosen']);
