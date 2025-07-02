<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Storage;
use App\Models\Dosen;

class ImageController extends Controller
{
    public function create()
    {
        $image = Image::latest()->first();
        $matakuliahs = MataKuliah::all();
        return view('upload', compact('image', 'matakuliahs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $image = Image::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return view('upload', ['image' => $image])
            ->with('success', 'Gambar berhasil diupload.');
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        Storage::delete('public/' . $image->image_path);
        $image->delete();

        return redirect('/upload')->with('success', 'Gambar berhasil dihapus.');
    }

    public function index()
    {
        $jumlah_mk = MataKuliah::count();
        $jumlah_dosen = Dosen::count();
        $jumlah_mahasiswa = MataKuliah::count(); // atau sesuai kebutuhan
        return view('home', compact('jumlah_mk', 'jumlah_dosen', 'jumlah_mahasiswa'));
    }
}
