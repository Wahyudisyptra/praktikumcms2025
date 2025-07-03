@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Mata Kuliah</h3>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-success">+ Tambah</a>
</div>
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="row g-4">
    @forelse($data as $item)
    <div class="col-md-6 col-lg-4">
        <div class="card card-mk h-100">
            <div class="card-body">
                <h5 class="card-title mb-2">{{ $item->mata_kuliah }}</h5>
                <p class="mb-1"><strong>Nama Mahasiswa:</strong> {{ $item->nama_mahasiswa }}</p>
                <p class="mb-1"><strong>Semester:</strong> {{ $item->semester }}</p>
                <p class="mb-2"><strong>Jadwal:</strong> {{ $item->jadwal }}</p>
                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('matakuliah.show', $item->id) }}" class="btn btn-sm btn-info text-white">Lihat</a>
                    <a href="{{ route('matakuliah.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-info text-center">Belum ada data mata kuliah</div>
    </div>
    @endforelse
</div>
@endsection