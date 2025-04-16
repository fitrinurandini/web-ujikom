<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;  // Pastikan Tag sudah diimport
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Mengambil semua artikel
        $tags = Tag::all(); // Mengambil semua tag

        return view('admin.article', compact('articles', 'tags'));
    }

    public function create()
    {
        return view('admin.article_create'); // Halaman untuk form tambah artikel
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Simpan artikel baru
        Article::create($validated);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article_edit', compact('article')); // Halaman untuk form edit artikel
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_keyword' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Cari artikel dan update
        $article = Article::findOrFail($id);
        $article->update($validated);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
