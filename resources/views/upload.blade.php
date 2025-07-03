@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Upload Materi Perkuliahan</h4>
            </div>
            <div class="card-body">
                <p class="mb-4 text-muted">Silakan upload file materi untuk mata kuliah yang tersedia. Hanya admin/dosen yang dapat mengakses fitur ini.</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Materi</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="matakuliah_id" class="form-label">Pilih Mata Kuliah</label>
                        <select name="matakuliah_id" id="matakuliah_id" class="form-control" required>
                            @foreach($matakuliahs as $mk)
                                <option value="{{ $mk->id }}">{{ $mk->mata_kuliah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload File Materi</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                    </div>
                    <button type="submit" class="btn btn-success">Upload Materi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@if(isset($allImages) && $allImages->count())
    <div class="mt-5">
        <h5>Daftar Materi yang Sudah Diupload</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul Materi</th>
                    <th>File</th>
                    <th>Waktu Upload</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allImages as $img)
                <tr>
                    <td>{{ $img->title }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $img->image_path) }}" target="_blank" class="btn btn-sm btn-info">Lihat/Download</a>
                    </td>
                    <td>{{ $img->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
