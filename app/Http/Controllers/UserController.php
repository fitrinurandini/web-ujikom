<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan semua data user
    public function index()
    {
        $users = UserData::all(); // Mengambil semua user
        return view('admin.data_user', compact('users')); // Mengarahkan ke view data_user
    }

    // Tampilkan form tambah user
    public function create()
    {
        return view('admin.data_user_create');
    }

    // Simpan data user baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:datausers',
            'password' => 'required|min:6'
        ]);

        UserData::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.data_user.index')->with('success', 'User berhasil ditambahkan');
    }

    // Tampilkan form edit user
    public function edit(UserData $user)
    {
        return view('admin.data_user_edit', compact('user'));
    }

    // Proses update data user
    public function update(Request $request, UserData $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password
        ]);

        return redirect()->route('admin.data_user.index')->with('success', 'User berhasil diperbarui');
    }

    // Hapus user
    public function destroy(UserData $user)
    {
        $user->delete();
        return redirect()->route('admin.data_user.index')->with('success', 'User berhasil dihapus');
    }
}
