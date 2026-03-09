<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        // Memasukkan data ke tabel profiles sesuai variabel di Controller kamu
        Profile::create([
            'name'      => 'Nabillatun Nafista',
            'title'     => 'D3 Teknik Informatika PENS',
            'bio'       => 'Saya Nabillatun Nafista, seorang mahasiswa Teknik Informatika yang memiliki antusiasme tinggi di dunia teknologi dan pengembangan digital...',
            'email'     => 'nnafista@gmail.com',
            'location'  => 'Lamongan, Indonesia',
            'photo'     => 'images/foto-fista.jpeg',
            'instagram' => 'https://www.instagram.com/_nnnfta/',
            'github'    => 'https://github.com/Nabillatunnafista',
        ]);
    }
}