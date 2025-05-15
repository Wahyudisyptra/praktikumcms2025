@extends('layouts.app')
@section('content')
<h2>Detail Mata Kuliah</h2>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $item->nama_mahasiswa }}</h5>
        <p class="card-text"><strong>Semester:</strong> {{ $item->semester }}</p>
        <p class="card-text"><strong>Mata Kuliah:</strong> {{ $item->mata_kuliah }}</p>
        <p class="card-text"><strong>Jadwal:</strong> {{ $item->jadwal }}</p>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection