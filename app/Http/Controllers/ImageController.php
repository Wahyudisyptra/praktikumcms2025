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
        $matakuliahs = \App\Models\MataKuliah::all();
        $allImages = Image::orderBy('created_at', 'desc')->get();
        return view('upload', compact('image', 'matakuliahs', 'allImages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,txt,jpg,jpeg,png|max:5120',
        ]);

        $imagePath = $request->file('image')->store('materi', 'public');

        \App\Models\Image::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('image.upload')->with('success', 'Materi berhasil diupload!');
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
