<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skripsi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);

        Admin::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
         Skripsi::create([
            'judul' => 'Analisis pengaruh Chatgpt Terhadap Pemahaman Mahasiswa',
            'nama' => 'Riski Afendi',
            'nim' => '6304221510',
            'angkatan' => '2022',
            'dosen_pembimbing1' => 'Fajri Profesio Putra, M.Cs',
            'dosen_pembimbing2' => 'Elvi Rahmi, M.Kom',
        
        ]);
    }
}