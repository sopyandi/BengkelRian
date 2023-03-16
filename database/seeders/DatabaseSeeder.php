<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Mekanik;
use App\Models\JenisKerusakan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        Mekanik::factory(1)->create();

        // SEEDER UNTUK JENIS KERUSAKAN
        JenisKerusakan::create([
            'jenisKerusakan' => 'Ganti Oli',
            'deskripsi' => 'Silahkan Ganti Oli Disini !!!'
        ]);
        JenisKerusakan::create([
            'jenisKerusakan' => 'Ganti Ban Dalam/Luar',
            'deskripsi' => 'Ganti Ban Berhadiah !!!'
        ]);
        JenisKerusakan::create([
            'jenisKerusakan' => 'Perbaikan Kelistrikan Q-Prope',
            'deskripsi' => 'Kelistrikan Akan Baik Dan Benar !!!'
        ]);
    }
}
