@extends('layouts.app')

@section('content')
<h2>Lihat Jadwal Mata Kuliah</h2>

<form method="GET" action="{{ route('matakuliah.show') }}">
    <label>Semester:</label><br>
    <input type="number" name="semester" required value="{{ request('semester') }}"><br><br>
    <button type="submit">Lihat Jadwal</button>
</form>

@if(isset($jadwal))
    <h3>Jadwal Semester {{ request('semester') }}</h3>
    @if($jadwal->isEmpty())
        <p>Tidak ada jadwal tersedia.</p>
    @else
        <ul>
            @foreach($jadwal as $item)
                <li>{{ $item->nama_mahasiswa }} - {{ $item->mata_kuliah }} - {{ $item->jadwal }}</li>
            @endforeach
        </ul>
    @endif
@endif
@endsection
