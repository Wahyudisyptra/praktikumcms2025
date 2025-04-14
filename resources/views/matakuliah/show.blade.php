<!DOCTYPE html>
<html>
<head>
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>{{ $matakuliah->title }}</h1>
    <p>{{ $matakuliah->content }}</p>

    <a href="{{ url('/matakuliah') }}">← Kembali ke Daftar Mata Kuliah</a>

    <hr>

    {{-- Jika halaman ini adalah "Daftar yang Diambil", tampilkan form mahasiswa --}}
    @if($matakuliah->id == 1)
        <h2>Form Pendaftaran Mata Kuliah</h2>
        <form action="{{ url('/matakuliah/daftar') }}" method="POST">
            @csrf
            <label for="mata_kuliah">Mata Kuliah:</label>
            <input type="text" name="mata_kuliah" id="mata_kuliah" required>


            <label for="nim">NIM Mahasiswa:</label>
            <input type="text" name="nim" id="nim" required><br><br>

            <button type="submit">Submit Daftar</button>
        </form>

        @if(session('daftar_success'))
            <p><strong>Berhasil Daftar!</strong></p>
            <p>Mata Kuliah: {{ session('mata_kuliah') }}</p>
            <p>NIM: {{ session('nim') }}</p>
        @endif
    @endif

    {{-- Jika halaman ini adalah "Dosen yang Mengajar", tampilkan form dosen --}}
    @if($matakuliah->id == 2)
        <h2>Form Dosen Pengajar</h2>
        <form action="{{ url('/matakuliah/dosen') }}" method="POST">
            @csrf
            <label for="nama_dosen">Nama Dosen:</label>
            <input type="text" name="nama_dosen" id="nama_dosen" required><br><br>

            <button type="submit">Submit Dosen</button>
        </form>

        @if(session('dosen_success'))
            <p><strong>Dosen Tercatat:</strong> {{ session('nama_dosen') }}</p>
        @endif
    @endif

</body>
</html>
