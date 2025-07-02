@extends('layouts.app') {{-- Jika layout utama kamu app.blade.php --}}

@section('content')
<div class="hero-section d-flex flex-column flex-md-row align-items-center justify-content-between mb-5">
    <div class="mb-4 mb-md-0">
        <h1 class="display-5 fw-bold mb-3">Selamat Datang di Sistem Mata Kuliah</h1>
        <p class="lead">Kelola data mata kuliah, materi, dan mahasiswa dengan mudah dan modern.</p>
    </div>
</div>
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-body">
            <h3 class="mb-4">Selamat Datang, {{ Auth::user()->name }}!</h3>

            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('matakuliah.index') }}" class="text-decoration-none">
                        <div class="card text-white bg-primary mb-3 card-mk h-100 shadow" style="cursor:pointer;">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-book fa-2x mb-2"></i>
                                <div class="card-header bg-transparent border-0 p-0 mb-2 fs-6">Total Data Mata Kuliah</div>
                                <h2 class="card-title mb-0">{{ $jumlah_mk }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3 card-mk h-100 shadow text-center" style="opacity:0.7;cursor:not-allowed;">
                        <div class="card-body">
                            <i class="fa-solid fa-chalkboard-user fa-2x mb-2"></i>
                            <div class="card-header bg-transparent border-0 p-0 mb-2 fs-6">Total Data Dosen</div>
                            <h2 class="card-title mb-0">{{ $jumlah_dosen ?? 0 }}</h2>
                            <div class="small mt-2 text-white-50">Belum tersedia</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3 card-mk h-100 shadow text-center" style="opacity:0.7;cursor:not-allowed;">
                        <div class="card-body">
                            <i class="fa-solid fa-users fa-2x mb-2"></i>
                            <div class="card-header bg-transparent border-0 p-0 mb-2 fs-6">Total Data Mahasiswa</div>
                            <h2 class="card-title mb-0">{{ $jumlah_mahasiswa }}</h2>
                            <div class="small mt-2 text-white-50">Belum tersedia</div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <p class="text-muted">Gunakan menu di atas untuk mengelola data mata kuliah, dosen, dan mahasiswa.</p>
        </div>
    </div>
</div>
@endsection
