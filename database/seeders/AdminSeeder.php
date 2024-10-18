<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'phone_number' => '081234567890',
            ],
            [
                'name' => 'Jaka Sembung',
                'username' => 'jaka',
                'password' => bcrypt('jaka123'),
                'phone_number' => '08123456732',
            ],
        ];
        foreach ($admins as $admin) {
            \App\Models\Admin::create($admin);
        }
    }
}
