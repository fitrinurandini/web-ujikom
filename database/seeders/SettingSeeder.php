<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'website_name' => 'WiFi Kawali',
                'website_description' => 'Website resmi WiFi Kawali yang menyediakan layanan internet cepat.',
                'website_logo' => 'default-logo.png',
                'email' => 'info@wifikawali.com',
                'phone' => '082112345678', // tambahkan ini
                'address' => 'Jl. Raya Kawali No.123',
                'maps' => 'https://goo.gl/maps/example',
                'facebook' => 'https://facebook.com/wifikawali',
                'instagram' => 'https://instagram.com/wifikawali',
                'youtube' => 'https://youtube.com/@wifikawali'
            ]
        );
        
    }
}
