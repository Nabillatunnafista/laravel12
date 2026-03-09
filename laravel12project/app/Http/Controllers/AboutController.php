<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class AboutController extends Controller
{
public function index()
{
    $profile = \App\Models\Profile::first(); 

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
        'Creative'  => ['Graphic Design & Video Editing'],
    ];

    return view('about', compact('profile', 'education', 'skills'));
}
}
