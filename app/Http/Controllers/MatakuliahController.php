<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\ModelNotFoundException; // tambahkan di atas

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = MataKuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'semester' => 'required|integer',
            'mata_kuliah' => 'required|string|max:255',
            'jadwal' => 'required|string|max:255',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil disimpan!');
    }

    public function show($id)
    {
         try {
        $item = MataKuliah::findOrFail($id);
        return view('matakuliah.show', compact('item'));
    }   catch (ModelNotFoundException $e) {
        return redirect()->route('matakuliah.index')->with('error', 'Data mata kuliah tidak ditemukan.');
    }
        
    }

    public function edit($id)
    {
        $item = MataKuliah::findOrFail($id);
        return view('matakuliah.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'semester' => 'required|integer',
            'mata_kuliah' => 'required|string|max:255',
            'jadwal' => 'required|string|max:255',
        ]);

        $item = MataKuliah::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        MataKuliah::findOrFail($id)->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus!');
    }
}
