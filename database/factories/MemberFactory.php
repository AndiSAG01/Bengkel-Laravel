<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    public function definition(): array
    {
        // Nama khas Indonesia
        $names = [
            'Ahmad Firdaus',
            'Siti Nurhaliza',
            'Budi Santoso',
            'Linda Kusuma',
            'Rizky Hidayat',
            'Dewi Ayu',
            'Andi Pratama',
            'Nur Aini',
            'Fajar Ramadhan',
            'Melati Putri',
        ];

        return [
            'nama' => $this->faker->unique()->randomElement($names),
            'nomor_handphone' => '08' . $this->faker->numberBetween(11, 99) . $this->faker->numerify('########'),
        ];
    }
}
