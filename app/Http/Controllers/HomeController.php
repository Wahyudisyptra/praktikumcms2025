<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\User;
use App\Models\Dosen;

class HomeController extends Controller
{
    public function index()
    {
        $jumlah_mk = MataKuliah::count();
        $jumlah_dosen = 0;
        $jumlah_mahasiswa = 0;
        return view('home', compact('jumlah_mk', 'jumlah_dosen', 'jumlah_mahasiswa'));
    }
}
