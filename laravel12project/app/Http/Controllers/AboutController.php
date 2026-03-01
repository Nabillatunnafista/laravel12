<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
public function index()
    {
        $profile = [
            'name'      => 'Nabillatun Nafista',
            'title'     => 'D3 Teknik Informatika PENS',
            'bio'       => 'Saya Nabillatun Nafista, seorang mahasiswa Teknik Informatika yang memiliki antusiasme tinggi di dunia teknologi dan pengembangan digital. Saya sangat menikmati proses belajar hal-hal baru, mulai dari menyusun logika pemrograman hingga mengeksplorasi desain antarmuka yang menarik. Melalui studi saya, saya terus mengasah kemampuan teknis untuk membangun solusi perangkat lunak yang andal. Bagi saya, teknologi adalah wadah tanpa batas untuk berkreativitas dan memberikan solusi yang benar-benar bermanfaat serta mudah digunakan bagi banyak orang.',
            'email'     => 'nnafista@gmail.com',
            'location'  => 'Lamongan, Indonesia',
            'photo'     => 'images/foto-fista.jpeg',
            'instagram' => 'https://www.instagram.com/_nnnfta/',
            'github'    => 'https://github.com/Nabillatunnafista',
        ];

        $education = [
            [
                'degree'      => 'D3 Teknik Informatika',
                'institution' => 'Politeknik Elektronika Negeri Surabaya',
                'year'        => '2024 - 2027',
            ]
        ];

        $skills = [
            'Frontend'  => ['Web Design & Development'],
            'Backend'   => ['System Logic & Database Management'],
            'Creative'     => ['Graphic Design & Video Editing'],
        ];

        return view('about', compact('profile', 'education', 'skills'));
    }
}
