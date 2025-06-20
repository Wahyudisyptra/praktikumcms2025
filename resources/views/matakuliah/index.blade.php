@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Mata Kuliah</h3>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-success">+ Tambah</a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-hover table-bordered align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Semester</th>
                <th>Mata Kuliah</th>
                <th>Jadwal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
            <tr>
                <td>{{ $item->nama_mahasiswa }}</td>
                <td class="text-center">{{ $item->semester }}</td>
                <td>{{ $item->mata_kuliah }}</td>
                <td>{{ $item->jadwal }}</td>
                <td class="text-center">
                    <a href="{{ route('matakuliah.show', $item->id) }}" class="btn btn-sm btn-info text-white">Lihat</a>
                    <a href="{{ route('matakuliah.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data mata kuliah</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
