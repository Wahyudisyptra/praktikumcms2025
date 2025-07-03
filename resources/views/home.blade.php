@extends('layouts.app')

@section('content')
<style>
.card-dashboard {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card-dashboard:hover {
    transform: translateY(-6px) scale(1.04);
    box-shadow: 0 8px 32px rgba(0,0,0,0.18);
    z-index: 2;
}
</style>
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
            <div class="row g-3">
                <div class="col-md-4">
                    <a href="{{ route('matakuliah.index') }}" class="text-decoration-none">
                        <div class="card card-dashboard text-white bg-primary mb-3 h-100" style="cursor:pointer;">
                            <div class="card-body text-center">
                                <div class="fw-bold fs-6 mb-2">Total Data Mata Kuliah</div>
                                <div class="display-6 fw-bold">{{ $jumlah_mk }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card card-dashboard text-white mb-3 h-100" style="background-color:#5cb85c; opacity:0.7;">
                        <div class="card-body text-center">
                            <div class="fw-bold fs-6 mb-2">Total Data Dosen</div>
                            <div class="display-6 fw-bold">0</div>
                            <div class="small mt-2 text-white-50">Belum tersedia</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dashboard text-white mb-3 h-100" style="background-color:#f6c23e; opacity:0.7;">
                        <div class="card-body text-center">
                            <div class="fw-bold fs-6 mb-2">Total Data Mahasiswa</div>
                            <div class="display-6 fw-bold">{{ $jumlah_mahasiswa }}</div>
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
