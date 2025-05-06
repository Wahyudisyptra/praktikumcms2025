@extends('layouts.app')

@section('content')
<style>
    .form-box {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: 0 auto;
    }

    .form-box h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .btn-submit {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        width: 100%;
    }

    .btn-submit:hover {
        background: #0056b3;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 20px;
        text-align: center;
    }
</style>

<div class="form-box">
    <h2>Pendaftaran Mata Kuliah</h2>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('matakuliah.show') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_mahasiswa">Nama Mahasiswa:</label>
            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" required>
        </div>

        <div class="form-group">
            <label for="semester">Semester:</label>
            <input type="number" name="semester" id="semester" required>
        </div>

        <div class="form-group">
            <label for="mata_kuliah">Nama Mata Kuliah:</label>
            <input type="text" name="mata_kuliah" id="mata_kuliah" required>
        </div>

        <div class="form-group">
            <label for="jadwal">Hari dan Jam:</label>
            <input type="text" name="jadwal" id="jadwal" placeholder="Contoh: Senin 08.00-10.00" required>
        </div>

        <button type="submit" class="btn-submit">Daftar</button>
    </form>
</div>
@endsection
