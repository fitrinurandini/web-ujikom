<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserData::all();
        return view('admin.data_user', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:datausers',
        ]);

        UserData::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('datauser')->with('success', 'User berhasil ditambahkan');
    }

    public function update(Request $request, UserData $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('datauser')->with('success', 'User berhasil diperbarui');
    }

    public function destroy(UserData $user)
    {
        $user->delete();
        return redirect()->route('datauser')->with('success', 'User berhasil dihapus');
    }
}
