<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|integer',
            // ... tambahkan validasi lain dari form Anda ...
            'about' => 'required|string',
        ]);
        
        $validatedData['slug'] = Str::slug($validatedData['title']);

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('public/thumbnails');
            $validatedData['thumbnail'] = $thumbnailPath;
        }

        Package::create($validatedData);

        return redirect()->route('admin.packages.index')->with('success', 'Paket Umroh berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     * INI FUNGSI UNTUK MENAMPILKAN FORM EDIT.
     */
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     * INI FUNGSI UNTUK MENYIMPAN PERUBAHAN DARI FORM EDIT.
     */
    public function update(Request $request, Package $package)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|integer',
            // ... tambahkan validasi lain dari form Anda ...
            'about' => 'required|string',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title']);

        if ($request->hasFile('thumbnail')) {
            // Hapus gambar lama jika ada
            if ($package->thumbnail) {
                Storage::delete($package->thumbnail);
            }
            $thumbnailPath = $request->file('thumbnail')->store('public/thumbnails');
            $validatedData['thumbnail'] = $thumbnailPath;
        }

        $package->update($validatedData);

        return redirect()->route('admin.packages.index')->with('success', 'Paket Umroh berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     * INI FUNGSI UNTUK MENGHAPUS DATA.
     */
    public function destroy(Package $package)
    {
        // Hapus gambar terkait jika ada
        if ($package->thumbnail) {
            Storage::delete($package->thumbnail);
        }
        
        $package->delete();

        return redirect()->route('admin.packages.index')->with('success', 'Paket Umroh berhasil dihapus.');
    }
}