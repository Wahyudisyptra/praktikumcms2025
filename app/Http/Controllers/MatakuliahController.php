<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        return view('matakuliah.index');
    }

    public function store(Request $request)
    {
        MataKuliah::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'jadwal' => $request->jadwal,
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Berhasil mendaftar mata kuliah!');
    }

    public function show(Request $request)
    {
        $jadwal = null;

        if ($request->filled('nama_mahasiswa') && $request->filled('semester')) {
            $jadwal = MataKuliah::where('nama_mahasiswa', $request->nama_mahasiswa)
                ->where('semester', $request->semester)
                ->get();
        }

        return view('matakuliah.show', compact('jadwal'));
    }
}
