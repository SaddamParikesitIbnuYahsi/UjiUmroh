<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama dashboard admin.
     */
    public function index()
    {
        // Cukup tampilkan view untuk dashboard admin
        return view('admin.dashboard');
    }
}