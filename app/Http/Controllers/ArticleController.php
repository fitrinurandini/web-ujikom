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
            // 1. Validasi input
            $validated = $request->validate([
                'title'            => 'required|string|max:255',
                'content'          => 'required|string',
                'meta_keywords'    => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:255',
                'status'           => 'required|boolean',        // ubah in:active,inactive → boolean
                'tags'             => 'nullable|array',
                'tags.*'           => 'exists:tags,id',
            ]);

            // 2. Simpan artikel
            $article = Article::create($validated);

            // 3. Sync tags (jika ada)
            if (!empty($validated['tags'])) {
                $article->tags()->sync($validated['tags']);
            }

            return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan.');
        }

        public function update(Request $request, Article $article)
        {
            $validated = $request->validate([
                'title'            => 'required|string|max:255',
                'content'          => 'required|string',
                'meta_keywords'    => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:255',
                'status'           => 'required|boolean',
                'tags'             => 'nullable|array',
                'tags.*'           => 'exists:tags,id',
            ]);

            // 1. Update artikel
            $article->update($validated);

            // 2. Sync ulang tags
            $article->tags()->sync($validated['tags'] ?? []);

            return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
        }  


    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
    public function show(Article $article)
    {
        // me–load view resources/views/article/show.blade.php
        return view('article.show', compact('article'));
    }
}
