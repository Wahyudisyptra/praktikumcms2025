@extends('layouts.app')
@section('content')
<h2>Daftar Mata Kuliah</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Semester</th>
            <th>Mata Kuliah</th>
            <th>Jadwal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->nama_mahasiswa }}</td>
            <td>{{ $item->semester }}</td>
            <td>{{ $item->mata_kuliah }}</td>
            <td>{{ $item->jadwal }}</td>
            <td>
                <a href="{{ route('matakuliah.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('matakuliah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('matakuliah.destroy', $item->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection