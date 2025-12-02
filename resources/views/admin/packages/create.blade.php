<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Paket Umroh Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <!-- ======================================================= -->
                    <!-- BLOK UNTUK MENAMPILKAN ERROR VALIDASI (Sangat Penting) -->
                    <!-- ======================================================= -->
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                            <p class="font-bold">Terjadi Kesalahan:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Nama Paket -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Nama Paket</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('title') }}" required>
                        </div>

                        <!-- Lokasi -->
                        <div class="mb-4">
                            <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                            <input type="text" name="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('location') }}" required>
                        </div>

                        <!-- Harga -->
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Harga (Angka saja, cth: 25000000)</label>
                            <input type="number" name="price" id="price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('price') }}" required>
                        </div>
                        
                        <!-- Kuota -->
                        <div class="mb-4">
                            <label for="quota" class="block text-sm font-medium text-gray-700">Kuota Jamaah</label>
                            <input type="number" name="quota" id="quota" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('quota') }}" required>
                        </div>
                        
                        <!-- Tanggal Berangkat -->
                        <div class="mb-4">
                            <label for="departure_date" class="block text-sm font-medium text-gray-700">Tanggal Keberangkatan</label>
                            <input type="date" name="departure_date" id="departure_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('departure_date') }}" required>
                        </div>

                        <!-- Durasi -->
                        <div class="mb-4">
                            <label for="duration" class="block text-sm font-medium text-gray-700">Durasi (cth: 9 Hari)</label>
                            <input type="text" name="duration" id="duration" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('duration') }}" required>
                        </div>

                        <!-- Tipe Paket -->
                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Tipe Paket (cth: Reguler)</label>
                            <input type="text" name="type" id="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('type') }}" required>
                        </div>

                        <!-- Deskripsi -->
                         <div class="mb-4">
                            <label for="about" class="block text-sm font-medium text-gray-700">Deskripsi Paket</label>
                            <textarea name="about" id="about" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('about') }}</textarea>
                        </div>
                        
                        <!-- Thumbnail -->
                        <div class="mb-4">
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Gambar Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('admin.packages.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Simpan Paket
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>