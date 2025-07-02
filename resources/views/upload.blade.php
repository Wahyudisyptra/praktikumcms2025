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
        @if (isset($image))
            <div class="card mt-4 shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">Gambar yang baru diupload</h5>
                </div>
                <div class="card-body text-center">
                    <p><strong>{{ $image->title }}</strong></p>
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid rounded" style="max-width: 300px;"><br><br>
                    <form action="{{ route('image.delete', $image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus gambar ini?')">Hapus Gambar</button>
                    </form>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
