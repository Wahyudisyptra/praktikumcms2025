<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';

    protected $fillable = [
        'nama_mahasiswa',
        'semester',
        'mata_kuliah',
        'jadwal',
    ];
}
