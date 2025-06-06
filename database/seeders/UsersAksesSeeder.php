<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersAksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('admin')
            ],
            
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}