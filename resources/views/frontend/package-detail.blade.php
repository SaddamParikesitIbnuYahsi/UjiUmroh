<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket: {{ $package->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar Sederhana -->
    <nav class="bg-white shadow-md p-4 sticky top-0 z-10">
        <div class="container mx-auto">
            <a href="{{ route('home') }}" class="font-bold text-xl text-blue-600">Travel Umroh</a>
        </div>
    </nav>

    <main class="container mx-auto p-4 md:p-8">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <img src="{{ Storage::url($package->thumbnail) }}" alt="Gambar {{ $package->title }}" class="w-full h-64 md:h-96 object-cover">
            <div class="p-6 md:p-8">
                <div class="md:flex justify-between items-start mb-6">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2 md:mb-0">{{ $package->title }}</h1>
                    <div class="text-right flex-shrink-0">
                        <p class="text-gray-500">Mulai dari</p>
                        <p class="text-blue-600 font-bold text-3xl">Rp {{ number_format($package->price) }}</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8 border-t border-b border-gray-200 py-6">
                    <div class="text-center"><strong class="block text-gray-500 text-sm">Keberangkatan</strong><span class="text-lg font-semibold">{{ \Carbon\Carbon::parse($package->departure_date)->format('d F Y') }}</span></div>
                    <div class="text-center"><strong class="block text-gray-500 text-sm">Durasi</strong><span class="text-lg font-semibold">{{ $package->duration }}</span></div>
                    <div class="text-center"><strong class="block text-gray-500 text-sm">Tipe Paket</strong><span class="text-lg font-semibold">{{ $package->type }}</span></div>
                    <div class="text-center"><strong class="block text-gray-500 text-sm">Kuota Tersisa</strong><span class="text-lg font-semibold">{{ $package->quota }} Jamaah</span></div>
                </div>
                <div class="prose max-w-none">
                    <h2 class="text-2xl font-semibold mb-4">Deskripsi Paket</h2>
                    <p>{{ $package->about }}</p>
                </div>
                <div class="mt-10 text-center">
                    <a href="#" class="bg-green-500 text-white font-bold py-4 px-10 rounded-lg text-xl hover:bg-green-600 transition-colors duration-300">Daftar Paket Ini Sekarang</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-8">
        <div class="container mx-auto text-center"><p>&copy; {{ date('Y') }} Travel Umroh Anda. All Rights Reserved.</p></div>
    </footer>

</body>
</html>