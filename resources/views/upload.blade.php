@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Upload Materi Perkuliahan</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">Silakan upload file materi untuk mata kuliah yang tersedia. Hanya admin/dosen yang dapat mengakses fitur ini.</p>
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
                        <label for="image" class="form-label">Upload File Materi</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                        <small class="text-muted">Format file: pdf, doc, docx, ppt, pptx, txt. Maksimal 5MB.</small>
                    </div>
                    <button type="submit" class="btn btn-success">Upload Materi</button>
                </form>
            </div>
        </div>
        @if(isset($allImages) && $allImages->count())
        <div class="card mt-4 shadow-sm">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Daftar File Materi yang Telah Diupload</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Judul</th>
                                <th>Nama File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allImages as $file)
                            <tr>
                                <td>{{ $file->title }}</td>
                                <td>{{ basename($file->image_path) }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $file->image_path) }}" class="btn btn-sm btn-primary" download>Download</a>
                                    <form action="{{ route('image.delete', $file->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus file ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
