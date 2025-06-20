@extends('layouts.app')
@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Detail Mata Kuliah</h4>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $item->nama_mahasiswa }}</h5>
        <p class="card-text"><strong>Semester:</strong> {{ $item->semester }}</p>
        <p class="card-text"><strong>Mata Kuliah:</strong> {{ $item->mata_kuliah }}</p>
        <p class="card-text"><strong>Jadwal:</strong> {{ $item->jadwal }}</p>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary mt-2">← Kembali</a>
    </div>
</div>
@endsection
