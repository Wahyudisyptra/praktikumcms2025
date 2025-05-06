<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nama_mahasiswa' => $this->faker->name(),
                'semester' => $this->faker->numberBetween(1, 8),
                'mata_kuliah' => $this->faker->randomElement([
                    'Pemrograman Web', 'Basis Data', 'Algoritma', 'Jaringan Komputer', 'Sistem Operasi'
                ]),
                'jadwal' => $this->faker->randomElement([
                    'Senin 08.00-10.00', 'Selasa 10.00-12.00', 'Rabu 13.00-15.00', 'Kamis 09.00-11.00'
                ]),
            ];
    }
}
