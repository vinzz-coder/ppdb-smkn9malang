<?php

namespace Database\Seeders;

use App\Models\deskripsi;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        deskripsi::create([
            'id' => 1,
            'deskripsi_aplikasi' => 'Aplikasi PPDB untuk memudahkan pendaftaran siswa baru secara online',
            'versi_aplikasi' => '1.0.0',
            'tanggal_dibuat' => '2026-01-01',
        ]);


    }
}
