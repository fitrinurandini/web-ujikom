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
                'website_logo' => 'asset/img/bg.jpeg',
                'email' => 'info@wifikawali.com',
                'phone' => '0881022296333', // tambahkan ini
                'address' => 'JL Talagasari, No. 35, Kawalimukti, Kawali, Kawalimukti, Ciamis, Kabupaten Ciamis, Jawa Barat 46253',
                'maps' => 'https://maps.app.goo.gl/V88exrFFDHAVmDj48',
                'facebook' => 'https://facebook.com/wifikawali',
                'instagram' => 'https://instagram.com/wifikawali',
                'youtube' => 'https://youtube.com/@wifikawali'
            ]
        );
        
    }
}
