<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->integer('semester');
            $table->string('mata_kuliah');
            $table->string('jadwal');
            $table->timestamps();
        });
        $this->callSeeder();
        
    }

    private function callSeeder(): void
    {
        // Jalankan seeder secara manual
        (new MatakuliahSeeder)->run();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
