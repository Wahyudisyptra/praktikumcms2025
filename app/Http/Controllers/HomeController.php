<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $jumlah_mk = MataKuliah::count();
        $jumlah_upload = 0; // Ganti jika kamu punya model untuk upload
        $jumlah_mahasiswa = User::count(); // Ganti jika kamu pakai role

        return view('home', compact('jumlah_mk', 'jumlah_upload', 'jumlah_mahasiswa'));
    }
}
