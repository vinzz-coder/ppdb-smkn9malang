<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Student',
            'email' => 'student@example.com',
            'password' => bcrypt('password'),
            'nik' => '1234567890123456',
            'nisn' => '1234567890',
            'asal_sekolah' => 'SMA Negeri 1',
            'alamat' => 'Jl. Merdeka No. 1, Jakarta',
            'no_hp' => '081234567890',
            'role' => 'student',

        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. Admin No. 1, Jakarta',
            'no_hp' => '089876543210',
            'role' => 'admin',
        ]);

    }
}
