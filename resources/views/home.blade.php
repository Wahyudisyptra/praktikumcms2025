@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="alert alert-success">
        Selamat datang di Sistem Informasi Mata Kuliah!
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Mata Kuliah</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $jumlah_mk }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Mahasiswa</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $jumlah_mahasiswa }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Total Upload Gambar</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $jumlah_upload }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
