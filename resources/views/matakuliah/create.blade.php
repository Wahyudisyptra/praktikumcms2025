@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Tambah Mata Kuliah</h4>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            @include('matakuliah._form', ['button' => 'Simpan'])
        </form>
    </div>
</div>
@endsection
