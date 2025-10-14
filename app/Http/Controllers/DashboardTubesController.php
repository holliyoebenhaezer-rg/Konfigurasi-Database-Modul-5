<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTubesController extends Controller
{
    public function index()
    {
        $data = [
            [
                'nama' => 'Pulau Umang',
                'harga' => 250000,
                'lokasi' => 'Sumberjaya',
                'rating' => 5.0,
                'kategori' => 'Wisata'
            ],
            [
                'nama' => 'Taman Nasional Ujung Kulon',
                'harga' => 150000,
                'lokasi' => 'Ujungjaya',
                'rating' => 4.5,
                'kategori' => 'Wisata'
            ],
            [
                'nama' => 'Paket Tur Pantai Carita',
                'harga' => 500000,
                'lokasi' => 'Labuan',
                'rating' => 4.8,
                'kategori' => 'Tur'
            ],
            [
                'nama' => 'Paket Wisata Pulau Burung',
                'harga' => 135000,
                'lokasi' => 'Sawah Luhur',
                'rating' => 4.5,
                'kategori' => 'Wisata'
            ],
        ];

        return view('tubes.dashboard_tubes', compact('data'));
    }
}
