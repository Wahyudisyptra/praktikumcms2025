@extends('layouts.app')
@section('content')
<h2>Tambah Mata Kuliah</h2>

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf
    @include('matakuliah._form', ['button' => 'Simpan'])
</form>
@endsection