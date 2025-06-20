<div class="mb-3">
    <label class="form-label">Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" class="form-control" value="{{ old('nama_mahasiswa', $item->nama_mahasiswa ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Semester</label>
    <input type="number" name="semester" class="form-control" value="{{ old('semester', $item->semester ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Mata Kuliah</label>
    <input type="text" name="mata_kuliah" class="form-control" value="{{ old('mata_kuliah', $item->mata_kuliah ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Jadwal</label>
    <input type="text" name="jadwal" class="form-control" placeholder="Contoh: Senin 08.00-10.00" value="{{ old('jadwal', $item->jadwal ?? '') }}" required>
</div>
<div class="text-end">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>
