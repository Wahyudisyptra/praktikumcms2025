<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;

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
        // Validasi input
        $validated = $request->validate([
            'nama_mahasiswa' => 'required|string|min:10|max:255',
            'semester' => 'required|integer|between:1,8',
            'mata_kuliah' => 'required|in:Pemrograman Web,Basis Data,Algoritma,Jaringan Komputer,Sistem Operasi',
            'jadwal' => 'required|in:Senin 08.00-10.00,Selasa 10.00-12.00,Rabu 13.00-15.00,Kamis 09.00-11.00',
        ]);


        try {
            MataKuliah::create($validated);
            return redirect()->route('matakuliah.index')->with('success', 'Data berhasil disimpan!');
        } catch (Throwable $e) {
            Log::error("Error menyimpan data: " . $e->getMessage(), [
                'request' => $request->all(),
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function show($id)
    {
        try {
            $item = MataKuliah::findOrFail($id);
            return view('matakuliah.show', compact('item'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('matakuliah.index')->with('error', 'Data mata kuliah tidak ditemukan.');
        } catch (Throwable $e) {
            Log::error("Error menampilkan data: " . $e->getMessage(), [
                'id' => $id,
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
            return redirect()->route('matakuliah.index')->with('error', 'Terjadi kesalahan saat menampilkan data.');
        }
    }

    public function edit($id)
    {
        try {
            $item = MataKuliah::findOrFail($id);
            return view('matakuliah.edit', compact('item'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('matakuliah.index')->with('error', 'Data tidak ditemukan.');
        } catch (Throwable $e) {
            Log::error("Error mengakses edit: " . $e->getMessage(), [
                'id' => $id,
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
            return redirect()->route('matakuliah.index')->with('error', 'Terjadi kesalahan saat membuka halaman edit.');
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_mahasiswa' => 'required|string|min:10|max:255',
            'semester' => 'required|integer|between:1,8',
            'mata_kuliah' => 'required|in:Pemrograman Web,Basis Data,Algoritma,Jaringan Komputer,Sistem Operasi',
            'jadwal' => 'required|in:Senin 08.00-10.00,Selasa 10.00-12.00,Rabu 13.00-15.00,Kamis 09.00-11.00',
        ]);

        try {
            $item = MataKuliah::findOrFail($id);
            $item->update($validated);

            return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diperbarui!');
        } catch (Throwable $e) {
            Log::error("Error memperbarui data: " . $e->getMessage(), [
                'id' => $id,
                'request' => $request->all(),
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }
    }

    public function destroy($id)
    {
        try {
            MataKuliah::findOrFail($id)->delete();
            return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus!');
        } catch (Throwable $e) {
            Log::error("Error menghapus data: " . $e->getMessage(), [
                'id' => $id,
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return redirect()->route('matakuliah.index')->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
}
