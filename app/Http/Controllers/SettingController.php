<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // Menampilkan halaman setting
    public function index()
    {
        $settings = Setting::first(); // Mengambil data setting pertama
        return view('admin.settings', compact('settings'));
    }

    // Update Profile
    public function updateProfile(Request $request)
    {
        $request->validate([
            'website_name' => 'required|string|max:255',
            'website_description' => 'required|string',
            'website_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $settings = Setting::first(); // Ambil data setting pertama

        if ($request->hasFile('website_logo')) {
            // Simpan logo
            $logoPath = $request->file('website_logo')->store('logos', 'public');
            $settings->website_logo = $logoPath;
        }

        $settings->website_name = $request->website_name;
        $settings->website_description = $request->website_description;
        $settings->save();

        return redirect()->route('settings.index')->with('success', 'Profile updated successfully.');
    }

    // Update Kontak
    public function updateContact(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'address' => 'required|string',
            'maps' => 'required|string',
        ]);

        $settings = Setting::first();
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->address = $request->address;
        $settings->maps = $request->maps;
        $settings->save();

        return redirect()->route('settings.index')->with('success', 'Contact updated successfully.');
    }

    // Update Media Sosial
    public function updateSocialMedia(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        $settings = Setting::first();
        $settings->facebook = $request->facebook;
        $settings->youtube = $request->youtube;
        $settings->instagram = $request->instagram;
        $settings->twitter = $request->twitter;
        $settings->save();

        return redirect()->route('settings.index')->with('success', 'Social media updated successfully.');
    }
}
