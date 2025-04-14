<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('admin.module', compact('modules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_module' => 'required|string|max:255',
            'deskripsi_module' => 'nullable|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
            'status' => 'required|boolean',
            'index_module' => 'required|integer', // Index modul wajib diisi
        ]);

        // Menyimpan file foto (icon)
        $iconPath = $request->file('icon')->store('icons', 'public');

        // Menyimpan data modul
        Module::create([
            'nama_module' => $request->nama_module,
            'deskripsi_module' => $request->deskripsi_module,
            'icon' => $iconPath, // Menyimpan path foto
            'status' => $request->status,
            'index_module' => $request->index_module,
        ]);

        return redirect()->back()->with('success', 'Module berhasil ditambahkan.');
    }

    public function update(Request $request, Module $module)
    {
        $request->validate([
            'nama_module' => 'required|string|max:255',
            'deskripsi_module' => 'nullable|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
            'status' => 'required|boolean',
            'index_module' => 'required|integer', // Index modul wajib diisi
        ]);

        // Jika ada foto yang diunggah, hapus foto lama dan simpan yang baru
        if ($request->hasFile('icon')) {
            // Hapus foto lama
            if ($module->icon) {
                Storage::disk('public')->delete($module->icon);
            }

            // Simpan foto baru
            $iconPath = $request->file('icon')->store('icons', 'public');
            $module->icon = $iconPath;
        }

        // Memperbarui data modul
        $module->update($request->only('nama_module', 'deskripsi_module', 'status', 'index_module'));

        return redirect()->back()->with('success', 'Module berhasil diperbarui.');
    }

    public function destroy(Module $module)
    {
        // Hapus foto terkait sebelum menghapus data
        if ($module->icon) {
            Storage::disk('public')->delete($module->icon);
        }

        $module->delete();
        return redirect()->back()->with('success', 'Module berhasil dihapus.');
    }
}
