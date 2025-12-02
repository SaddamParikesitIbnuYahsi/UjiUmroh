<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Kita bisa menambahkan rute untuk detail nanti jika diperlukan
// Route::get('/paket/{slug}', [HomeController::class, 'detail'])->name('packages.detail');