<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function show($id)
    {
        $matakuliah = Matakuliah::find($id);
        if (!$matakuliah) {
            abort(404);
        }
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function daftar(Request $request)
    {
        return redirect()->back()->with([
            'daftar_success' => true,
            'mata_kuliah' => $request->mata_kuliah,
            'nim' => $request->nim,
        ]);
    }

    public function dosen(Request $request)
    {
        return redirect()->back()->with([
            'dosen_success' => true,
            'nama_dosen' => $request->nama_dosen,
        ]);
    }
}
