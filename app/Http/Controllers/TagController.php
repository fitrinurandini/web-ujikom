<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Menampilkan daftar tag
    public function index()
    {
        $tags = Tag::latest()->get(); // Mendapatkan tag terbaru
        return view('admin.tag', compact('tags')); // Menampilkan ke view
    }

    // Menambahkan tag baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255', // Pastikan nama tag valid
        ]);

        // Membuat tag baru
        Tag::create($request->only('name'));

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Tag berhasil ditambahkan');
    }

    // Mengupdate tag
    public function update(Request $request, Tag $tag)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255', // Pastikan nama tag valid
        ]);

        // Mengupdate tag
        $tag->update($request->only('name'));

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Tag berhasil diupdate');
    }

    // Menghapus tag
    public function destroy(Tag $tag)
    {
        // Menghapus tag
        $tag->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Tag berhasil dihapus');
    }
}
