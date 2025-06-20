@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Tambah Mata Kuliah</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            @include('matakuliah._form', ['button' => 'Simpan'])
        </form>
    </div>
</div>
@endsection
