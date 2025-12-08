<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@pasifikdrink.com',
            'password' => Hash::make('Admin123!'),
            'phone' => '6281234567890',
            'role' => 'superadmin',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Staff Admin',
            'email' => 'staff@pasifikdrink.com',
            'password' => Hash::make('Staff123!'),
            'phone' => '628987654321',
            'role' => 'admin',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);
    }
}