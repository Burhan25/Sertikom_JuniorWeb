<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::firstOrCreate([
            'nim' => '123456789',
            'nama' => 'John Doe',
            'email' => '8nQ1L@example.com',
            'alamat' => 'Jl. Jalan',
            'gender' => 1,
            'umur' => 20
        ]);
    }
}
