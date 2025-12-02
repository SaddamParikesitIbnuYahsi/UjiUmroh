<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Paket Umroh: {{ $package->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @if ($errors->any())
                        <div class="mb-4 font-medium text-red-600">... error handling ...</div>
                    @endif

                    <form action="{{ route('admin.packages.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- PENTING UNTUK FORM EDIT -->
                        
                        <!-- Nama Paket -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Nama Paket</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md" value="{{ old('title', $package->title) }}" required>
                        </div>

                        <!-- Harga -->
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                            <input type="number" name="price" id="price" class="mt-1 block w-full rounded-md" value="{{ old('price', $package->price) }}" required>
                        </div>
                        
                        <!-- Tambahkan field lain di sini, dengan value diisi data lama -->
                        <!-- Contoh: location, quota, departure_date, dll. -->

                        <!-- Deskripsi -->
                         <div class="mb-4">
                            <label for="about" class="block text-sm font-medium text-gray-700">Deskripsi Paket</label>
                            <textarea name="about" id="about" rows="4" class="mt-1 block w-full rounded-md">{{ old('about', $package->about) }}</textarea>
                        </div>
                        
                        <!-- Thumbnail -->
                        <div class="mb-4">
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Ganti Gambar Thumbnail</label>
                            @if($package->thumbnail)
                                <img src="{{ Storage::url($package->thumbnail) }}" alt="Current Thumbnail" class="w-32 h-32 object-cover my-2">
                            @endif
                            <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('admin.packages.index') }}" class="text-sm text-gray-600 mr-4">Batal</a>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>