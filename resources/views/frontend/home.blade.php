<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imadinah Haramain - Travel Umroh & Haji Resmi</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FONT AWESOME (Untuk Ikon Profesional & Real) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        emerald: {
                            850: '#064e3b',
                            950: '#022c22',
                        },
                        gold: {
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: float 4s ease-in-out infinite;
        }
        .bg-islamic-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans">

    @php
        $nomor_wa = '6281327659373';
        $pesan_wa_umum = 'Assalamualaikum, saya ingin bertanya tentang informasi umroh dari website Imadinah Haramain.';
        $link_wa_umum = 'https://wa.me/' . $nomor_wa . '?text=' . urlencode($pesan_wa_umum);
    @endphp

    <!-- Top Bar -->
    <div class="bg-emerald-950 text-white py-2 hidden md:block border-b border-emerald-900">
        <div class="container mx-auto px-6 flex justify-between items-center text-xs md:text-sm">
            <div class="flex gap-6">
                <span class="flex items-center gap-2"><i class="fa-solid fa-phone text-gold-400"></i> +62 813-2765-9373</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-envelope text-gold-400"></i> info@imadinah.com</span>
            </div>
            <div class="flex gap-4">
                <a href="#download" class="hover:text-gold-400 transition flex items-center gap-2"><i class="fa-solid fa-file-pdf"></i> Download Brosur</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="flex items-center gap-3">
                    <!-- Logo Icon Professional -->
                    <div class="w-10 h-10 bg-emerald-800 rounded-lg flex items-center justify-center text-gold-400 text-xl shadow-md">
                        <i class="fa-solid fa-kaaba"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-emerald-900 tracking-tight">Imadinah Haramain</h1>
                    </div>
                </a>
                
                <div class="hidden md:flex gap-8 items-center text-sm font-medium">
                    <a href="#about" class="text-gray-600 hover:text-emerald-700 transition">Tentang Kami</a>
                    <a href="#layanan" class="text-gray-600 hover:text-emerald-700 transition">Layanan</a>
                    <a href="#paket" class="text-gray-600 hover:text-emerald-700 transition">Paket Umroh</a>
                    <a href="#keunggulan" class="text-gray-600 hover:text-emerald-700 transition">Keunggulan</a>
                    <a href="{{ $link_wa_umum }}" target="_blank" class="bg-emerald-700 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-emerald-800 transition shadow-lg shadow-emerald-700/30 flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Hubungi Kami
                    </a>
                </div>

                <div class="md:hidden">
                    <button class="text-emerald-900 text-2xl">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative bg-gradient-to-br from-emerald-900 via-emerald-800 to-emerald-700 text-white overflow-hidden">
        <div class="bg-islamic-pattern absolute inset-0 opacity-10"></div>
        <div class="container mx-auto px-6 py-20 md:py-32 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 px-4 py-1.5 rounded-full text-xs md:text-sm font-medium text-gold-400">
                        <i class="fa-solid fa-certificate"></i> Resmi Kemenag & Terakreditasi
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                        Wujudkan <span class="text-gold-400 italic">#PerjalananSuci</span> Penuh Berkah
                    </h1>
                    <p class="text-lg text-emerald-100/90 leading-relaxed max-w-lg">
                        Imadinah Haramain hadir mengantarkan Anda menuju Baitullah dengan pelayanan prima, amanah, dan bimbingan ibadah sesuai sunnah.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#paket" class="bg-gold-500 text-white px-8 py-4 rounded-xl font-bold text-center hover:bg-gold-600 transition shadow-lg transform hover:-translate-y-1">
                            Lihat Paket Umroh
                        </a>
                        <a href="#layanan" class="bg-transparent border-2 border-white/30 px-8 py-4 rounded-xl font-bold text-center hover:bg-white/10 transition">
                            Layanan Kami
                        </a>
                    </div>
                </div>
                <!-- Hero Image Placeholder -->
                <div class="hidden md:block float-animation relative">
                    <div class="absolute -inset-4 bg-gold-500/20 rounded-full blur-3xl"></div>
                    <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=1000&auto=format&fit=crop" alt="Mekkah" class="relative rounded-2xl shadow-2xl border-4 border-white/10 w-full object-cover h-[450px]">
                </div>
            </div>
        </div>
    </header>

    <!-- STATS BAR -->
   <!-- VALUE PROPOSITION BAR (PENGGANTI STATS BAR) -->
    <div class="bg-emerald-950 py-12 text-white relative z-20 -mt-2 shadow-xl">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-emerald-800/50">
                <!-- Item 1: Legalitas (Paling Penting untuk Travel Baru) -->
                <div class="flex flex-col items-center justify-center hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl text-gold-400 mb-2">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                    <span class="text-lg font-bold">Berizin Resmi</span>
                    <span class="text-xs uppercase tracking-wider text-emerald-200 mt-1">Kemenag RI</span>
                </div>

                <!-- Item 2: Kualitas Pembimbing (Kekuatan Utama) -->
                <div class="flex flex-col items-center justify-center hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl text-gold-400 mb-2">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <span class="text-lg font-bold">Pembimbing</span>
                    <span class="text-xs uppercase tracking-wider text-emerald-200 mt-1">Sesuai Sunnah</span>
                </div>

                <!-- Item 3: Fasilitas Fisik (Bisa Dijanjikan) -->
                <div class="flex flex-col items-center justify-center hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl text-gold-400 mb-2">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <span class="text-lg font-bold">Hotel Dekat</span>
                    <span class="text-xs uppercase tracking-wider text-emerald-200 mt-1">Masjidil Haram</span>
                </div>

                <!-- Item 4: Kenyamanan Penerbangan -->
                <div class="flex flex-col items-center justify-center hover:-translate-y-1 transition duration-300">
                    <div class="text-4xl text-gold-400 mb-2">
                        <i class="fa-solid fa-plane-circle-check"></i>
                    </div>
                    <span class="text-lg font-bold">Direct Flight</span>
                    <span class="text-xs uppercase tracking-wider text-emerald-200 mt-1">Tanpa Transit</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT US -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-gold-100 rounded-full -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1564769662533-4f00a87b4056?q=80&w=1000&auto=format&fit=crop" class="rounded-2xl shadow-xl w-full" alt="Jamaah Umroh">
                    <div class="absolute bottom-6 right-6 bg-white p-4 rounded-xl shadow-lg border-l-4 border-emerald-600 max-w-xs">
                        <p class="font-bold text-gray-800 text-sm flex items-center gap-2"><i class="fa-solid fa-shield-halved text-emerald-600"></i> Terdaftar di SISKOPATUH</p>
                        <p class="text-xs text-gray-500 mt-1">Sistem resmi Kemenag untuk keamanan jamaah.</p>
                    </div>
                </div>
                <div>
                    <span class="text-emerald-700 font-bold uppercase tracking-wider text-sm">Siapa Kami</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Penyelenggara Umroh & Haji Resmi dan Amanah</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Imadinah Haramain berkomitmen memberikan pengalaman ibadah berkualitas. Kami bukan sekadar travel, tapi sahabat perjalanan ibadah Anda.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="bg-emerald-100 w-8 h-8 flex items-center justify-center rounded-lg text-emerald-700"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Legalitas Terjamin</h4>
                                <p class="text-sm text-gray-600">Izin resmi Kemenag. Hindari risiko gagal berangkat.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-emerald-100 w-8 h-8 flex items-center justify-center rounded-lg text-emerald-700"><i class="fa-solid fa-check"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Fasilitas Premium</h4>
                                <p class="text-sm text-gray-600">Hotel dekat masjid, makanan menu Indonesia, bus AC terbaru.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN KAMI (ICONS FIXED) -->
    <section id="layanan" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-emerald-600 font-semibold text-sm uppercase">Pilih Layanan</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Layanan Kami</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Layanan 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1 text-center border-b-4 border-emerald-600 group">
                    <div class="w-16 h-16 bg-emerald-50 rounded-full flex items-center justify-center text-3xl mx-auto mb-6 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition">
                        <i class="fa-solid fa-kaaba"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Umroh Premium</h3>
                    <p class="text-gray-600 text-sm">Hotel bintang 5 dekat pelataran masjid.</p>
                </div>
                <!-- Layanan 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1 text-center border-b-4 border-gold-500 group">
                    <div class="w-16 h-16 bg-gold-50 rounded-full flex items-center justify-center text-3xl mx-auto mb-6 text-gold-600 group-hover:bg-gold-500 group-hover:text-white transition">
                        <i class="fa-solid fa-plane-departure"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Umroh Plus Wisata</h3>
                    <p class="text-gray-600 text-sm">Paket ibadah plus Turki, Dubai, atau Mesir.</p>
                </div>
                <!-- Layanan 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1 text-center border-b-4 border-emerald-600 group">
                    <div class="w-16 h-16 bg-emerald-50 rounded-full flex items-center justify-center text-3xl mx-auto mb-6 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition">
                        <i class="fa-solid fa-mosque"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Haji Khusus</h3>
                    <p class="text-gray-600 text-sm">Program haji percepatan (Haji Plus) VVIP.</p>
                </div>
                <!-- Layanan 4 -->
                <div class="bg-white p-8 rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-1 text-center border-b-4 border-gold-500 group">
                    <div class="w-16 h-16 bg-gold-50 rounded-full flex items-center justify-center text-3xl mx-auto mb-6 text-gold-600 group-hover:bg-gold-500 group-hover:text-white transition">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Wisata Halal</h3>
                    <p class="text-gray-600 text-sm">Jelajahi dunia dengan jaminan makanan halal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN KAMI (ICONS FIXED) -->
    <section id="keunggulan" class="py-20 bg-emerald-900 text-white relative overflow-hidden">
        <div class="bg-islamic-pattern absolute inset-0 opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-12">
                <span class="text-gold-400 font-semibold text-sm uppercase">Kenapa Memilih Kami?</span>
                <h2 class="text-3xl font-bold mt-2">Keunggulan Imadinah Haramain</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div class="flex gap-4 items-start p-4 rounded-xl hover:bg-white/5 transition">
                    <div class="w-12 h-12 bg-gold-500 rounded-lg flex-shrink-0 flex items-center justify-center text-xl text-emerald-900 shadow-lg">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Legalitas Resmi</h4>
                        <p class="text-emerald-200 text-sm leading-relaxed">Berizin resmi Kemenag dan SISKOPATUH.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="flex gap-4 items-start p-4 rounded-xl hover:bg-white/5 transition">
                    <div class="w-12 h-12 bg-gold-500 rounded-lg flex-shrink-0 flex items-center justify-center text-xl text-emerald-900 shadow-lg">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Pembimbing Bersertifikat</h4>
                        <p class="text-emerald-200 text-sm leading-relaxed">Didampingi Ustadz bersertifikat BNSP.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="flex gap-4 items-start p-4 rounded-xl hover:bg-white/5 transition">
                    <div class="w-12 h-12 bg-gold-500 rounded-lg flex-shrink-0 flex items-center justify-center text-xl text-emerald-900 shadow-lg">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Hotel Dekat Haram</h4>
                        <p class="text-emerald-200 text-sm leading-relaxed">Akomodasi sangat dekat Masjidil Haram.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="flex gap-4 items-start p-4 rounded-xl hover:bg-white/5 transition">
                    <div class="w-12 h-12 bg-gold-500 rounded-lg flex-shrink-0 flex items-center justify-center text-xl text-emerald-900 shadow-lg">
                        <i class="fa-solid fa-tags"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Harga Transparan</h4>
                        <p class="text-emerald-200 text-sm leading-relaxed">Harga jujur tanpa biaya tersembunyi.</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="flex gap-4 items-start p-4 rounded-xl hover:bg-white/5 transition">
                    <div class="w-12 h-12 bg-gold-500 rounded-lg flex-shrink-0 flex items-center justify-center text-xl text-emerald-900 shadow-lg">
                        <i class="fa-solid fa-plane-up"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Direct Flight</h4>
                        <p class="text-emerald-200 text-sm leading-relaxed">Penerbangan langsung tanpa transit.</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="flex gap-4 items-start p-4 rounded-xl hover:bg-white/5 transition">
                    <div class="w-12 h-12 bg-gold-500 rounded-lg flex-shrink-0 flex items-center justify-center text-xl text-emerald-900 shadow-lg">
                        <i class="fa-solid fa-suitcase-rolling"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Perlengkapan Premium</h4>
                        <p class="text-emerald-200 text-sm leading-relaxed">Koper dan perlengkapan eksklusif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PAKET UMROH -->
    <section id="paket" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-emerald-600 font-semibold text-sm uppercase">Pilihan Terbaik</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Paket Umroh Unggulan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Data Placeholder -->
                @forelse ($packages ?? [] as $package) 
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition overflow-hidden group">
                        <div class="relative h-56 overflow-hidden">
                            <div class="absolute top-4 right-4 bg-gold-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">BEST SELLER</div>
                            <img src="{{ asset($package->thumbnail) }}" alt="{{ $package->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl text-gray-900 mb-2">{{ $package->title }}</h3>
                            <div class="flex items-center gap-2 mb-4 text-sm text-gray-500">
                                <span><i class="fa-regular fa-calendar"></i> {{ \Carbon\Carbon::parse($package->departure_date)->format('d M Y') }}</span>
                                <span>•</span>
                                <span><i class="fa-regular fa-clock"></i> {{ $package->duration }} Hari</span>
                            </div>
                            <div class="flex items-end justify-between mb-6">
                                <div>
                                    <p class="text-xs text-gray-400">Mulai dari</p>
                                    <p class="text-2xl font-bold text-emerald-700">Rp {{ number_format($package->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            <a href="{{ $link_wa_umum }}" class="block w-full bg-emerald-700 text-white text-center py-3 rounded-lg font-semibold hover:bg-emerald-800 transition">
                                <i class="fa-brands fa-whatsapp"></i> Booking Seat
                            </a>
                        </div>
                    </div>
                @empty
                    <!-- Placeholder 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden group border border-gray-100">
                        <div class="h-56 bg-gray-200 relative">
                             <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                             <div class="absolute top-4 right-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full">9 Hari</div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Paket Umroh Reguler</h3>
                            <p class="text-gray-500 text-sm mb-4"><i class="fa-solid fa-star text-gold-400"></i> Hotel Bintang 4 • Saudia Airlines</p>
                            <p class="text-2xl font-bold text-emerald-700 mb-4">Rp 28.500.000</p>
                            <a href="{{ $link_wa_umum }}" class="block w-full border border-emerald-700 text-emerald-700 hover:bg-emerald-700 hover:text-white text-center py-3 rounded-lg transition"><i class="fa-regular fa-comment-dots"></i> Hubungi Kami</a>
                        </div>
                    </div>
                     <!-- Placeholder 2 -->
                     <div class="bg-white rounded-2xl shadow-lg overflow-hidden group border border-gray-100">
                        <div class="h-56 bg-gray-200 relative">
                             <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                             <div class="absolute top-4 right-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full">Plus Turki</div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Paket Umroh Plus Turki</h3>
                            <p class="text-gray-500 text-sm mb-4"><i class="fa-solid fa-star text-gold-400"></i> 12 Hari • Wisata Halal Istanbul</p>
                            <p class="text-2xl font-bold text-emerald-700 mb-4">Rp 32.500.000</p>
                            <a href="{{ $link_wa_umum }}" class="block w-full border border-emerald-700 text-emerald-700 hover:bg-emerald-700 hover:text-white text-center py-3 rounded-lg transition"><i class="fa-regular fa-comment-dots"></i> Hubungi Kami</a>
                        </div>
                    </div>
                     <!-- Placeholder 3 -->
                     <div class="bg-white rounded-2xl shadow-lg overflow-hidden group border border-gray-100">
                        <div class="h-56 bg-gray-200 relative">
                             <img src="https://images.unsplash.com/photo-1565552629477-e254f3a367c9?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                             <div class="absolute top-4 right-4 bg-gold-500 text-white text-xs font-bold px-3 py-1 rounded-full">12 Hari</div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-xl text-gray-900 mb-2">Paket Umroh Ramadhan</h3>
                            <p class="text-gray-500 text-sm mb-4"><i class="fa-solid fa-star text-gold-400"></i> Awal Ramadhan • Hotel Bintang 5</p>
                            <p class="text-2xl font-bold text-emerald-700 mb-4">Rp 35.000.000</p>
                            <a href="{{ $link_wa_umum }}" class="block w-full border border-emerald-700 text-emerald-700 hover:bg-emerald-700 hover:text-white text-center py-3 rounded-lg transition"><i class="fa-regular fa-comment-dots"></i> Hubungi Kami</a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- TOUR LEADER -->
    <section id="tour-leader" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <span class="text-emerald-600 font-semibold text-sm uppercase">Pembimbing Ibadah</span>
            <h2 class="text-3xl font-bold mb-12 text-gray-900">Didampingi Ustadz Berpengalaman</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- TL 1 -->
                <div class="group">
                    <div class="bg-gray-200 rounded-2xl h-72 w-full mb-4 overflow-hidden relative mx-auto max-w-sm flex items-center justify-center text-gray-400">
                        <i class="fa-solid fa-user text-6xl opacity-30"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Ustadz Hanif Al-Fatih</h3>
                    <p class="text-sm text-gray-500 mt-1">Lulusan Al-Azhar Kairo & Bersertifikat BNSP</p>
                </div>
                <!-- TL 2 -->
                <div class="group">
                    <div class="bg-gray-200 rounded-2xl h-72 w-full mb-4 overflow-hidden relative mx-auto max-w-sm flex items-center justify-center text-gray-400">
                         <i class="fa-solid fa-user text-6xl opacity-30"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Ustadz Abdullah Zaini</h3>
                    <p class="text-sm text-gray-500 mt-1">Pembimbing Ibadah Senior & Mutawwif</p>
                </div>
                <!-- TL 3 -->
                <div class="group">
                    <div class="bg-gray-200 rounded-2xl h-72 w-full mb-4 overflow-hidden relative mx-auto max-w-sm flex items-center justify-center text-gray-400">
                         <i class="fa-solid fa-user text-6xl opacity-30"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Ustadz Faris Sultoni</h3>
                    <p class="text-sm text-gray-500 mt-1">Tour Leader Profesional Timur Tengah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GOOGLE REVIEWS -->
    
            
    <!-- AIRLINE PARTNERS -->
    <section class="py-12 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-400 text-sm mb-8 uppercase tracking-widest">Partner Maskapai Resmi</p>
            <!-- Menggunakan Teks Keren untuk Maskapai karena logo asli berhak cipta, namun diberi style profesional -->
            <div class="flex flex-wrap justify-center gap-8 md:gap-16 items-center grayscale opacity-60 hover:opacity-100 transition duration-500">
                <span class="text-xl md:text-2xl font-bold font-serif italic text-gray-800">Garuda Indonesia</span>
                <span class="text-xl md:text-2xl font-bold font-serif text-gray-800">SAUDIA</span>
                <span class="text-xl md:text-2xl font-bold text-gray-800 tracking-tighter">TURKISH AIRLINES</span>
                <span class="text-xl md:text-2xl font-bold font-serif text-gray-800">Emirates</span>
                <span class="text-xl md:text-2xl font-bold text-gray-800">QATAR</span>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-emerald-900 to-emerald-800 py-16 text-center text-white relative overflow-hidden">
        <div class="bg-islamic-pattern absolute inset-0 opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Menjadi Tamu Allah?</h2>
            <p class="text-lg text-emerald-100 mb-8 max-w-2xl mx-auto">
                Jangan tunda niat suci Anda. Segera konsultasikan keberangkatan bersama tim Imadinah Haramain. Kursi terbatas!
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ $link_wa_umum }}" target="_blank" class="bg-gold-500 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-gold-600 transition shadow-xl transform hover:scale-105 flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp text-2xl"></i> Chat WhatsApp Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer (BAGIAN SOCIAL MEDIA YANG DIPERBAIKI) -->
    <footer class="bg-emerald-950 text-white pt-16 pb-8 border-t-4 border-gold-500">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-gold-500 rounded-lg flex items-center justify-center text-emerald-900 text-xl">
                            <i class="fa-solid fa-kaaba"></i>
                        </div>
                        <h3 class="font-bold text-xl">Imadinah</h3>
                    </div>
                    <p class="text-emerald-200/80 text-sm mb-6 leading-relaxed">
                        PT. Imadinah Haramain adalah penyelenggara perjalanan ibadah Umroh & Haji Khusus yang mengutamakan pelayanan, kenyamanan, dan bimbingan sesuai Sunnah.
                    </p>
                    
                    <!-- SOCIAL MEDIA PROFESSIONAL STYLE -->
                    <div class="flex gap-4">
                        <!-- Instagram -->
                        <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-white hover:border-transparent hover:bg-gradient-to-tr hover:from-yellow-400 hover:to-pink-600 transition duration-300">
                            <i class="fa-brands fa-instagram text-lg"></i>
                        </a>
                        <!-- Facebook -->
                        <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-white hover:border-transparent hover:bg-blue-600 transition duration-300">
                            <i class="fa-brands fa-facebook-f text-lg"></i>
                        </a>
                        <!-- Youtube -->
                        <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-white hover:border-transparent hover:bg-red-600 transition duration-300">
                            <i class="fa-brands fa-youtube text-lg"></i>
                        </a>
                         <!-- TikTok -->
                         <a href="#" class="w-10 h-10 rounded-full border border-gray-400 flex items-center justify-center text-white hover:border-transparent hover:bg-black transition duration-300">
                            <i class="fa-brands fa-tiktok text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Link Cepat -->
                <div>
                    <h4 class="font-bold text-lg mb-6 text-gold-400">Tautan Cepat</h4>
                    <ul class="space-y-3 text-emerald-200/80 text-sm">
                        <li><a href="#paket" class="hover:text-gold-400 transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Paket Umroh</a></li>
                        <li><a href="#layanan" class="hover:text-gold-400 transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Layanan</a></li>
                        <li><a href="#keunggulan" class="hover:text-gold-400 transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Keunggulan</a></li>
                        <li><a href="#about" class="hover:text-gold-400 transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-bold text-lg mb-6 text-gold-400">Hubungi Kami</h4>
                    <ul class="space-y-4 text-emerald-200/80 text-sm">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-gold-400"><i class="fa-solid fa-location-dot"></i></span>
                            <span>Jl. Raya Pasar Minggu No. 18<br>Jakarta Selatan, DKI Jakarta</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-gold-400"><i class="fa-solid fa-phone"></i></span>
                            <span>+62 813-2765-9373</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-gold-400"><i class="fa-solid fa-envelope"></i></span>
                            <span>info@imadinah.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Pembayaran -->
                <div>
                    <h4 class="font-bold text-lg mb-6 text-gold-400">Rekening Resmi</h4>
                    <div class="bg-emerald-900 p-4 rounded-xl border border-emerald-800 shadow-inner">
                        <p class="text-xs text-emerald-300 uppercase mb-1 flex items-center gap-2"><i class="fa-solid fa-building-columns"></i> Bank Syariah Indonesia</p>
                        <p class="text-xl font-mono font-bold text-white tracking-wider">7123-4567-89</p>
                        <p class="text-xs text-emerald-300 mt-2">a.n PT Imadinah Haramain</p>
                    </div>
                    <p class="text-xs text-emerald-400 mt-3 italic flex items-center gap-1"><i class="fa-solid fa-triangle-exclamation"></i> Pembayaran hanya ke rekening PT.</p>
                </div>
            </div>

            <div class="border-t border-emerald-900 pt-8 text-center text-sm text-emerald-400/60">
                <p>&copy; 2025 Imadinah Haramain. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Tidio Chatbot Script -->
    <script src="//code.tidio.co/0qwzorb2lmsuhwxhky9iqeeyojmyzfz1.js" async></script>

</body>
</html>