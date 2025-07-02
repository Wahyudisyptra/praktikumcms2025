@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Dosen</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" required>
            </div>
            <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $dosen->email }}" required>
            </div>
            <button class="btn btn-warning">Update</button>
        </form>
    </div>
</div>
@endsection 