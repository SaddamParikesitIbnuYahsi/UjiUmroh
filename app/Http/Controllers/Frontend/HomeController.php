<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $packages = [
        (object)[
            'title' => 'Paket Umroh Premium',
            'thumbnail' => 'images/gambar-premium.jpg', // SIMPAN GAMBAR DI public/images/
            'price' => 32500000,
            'departure_date' => '2025-12-15',
            'duration' => '9 Hari',
        ],
        (object)[
            'title' => 'Paket Umroh VIP',
            'thumbnail' => 'images/gambar-vip.jpg',
            'price' => 45000000,
            'departure_date' => '2026-01-20',
            'duration' => '12 Hari',
        ],
        (object)[
            'title' => 'Paket Umroh Reguler',
            'thumbnail' => 'images/gambar-reguler.jpg',
            'price' => 28000000,
            'departure_date' => '2026-02-10',
            'duration' => '9 Hari',
        ],
    ];

    return view('frontend.home', compact('packages'));
}
}