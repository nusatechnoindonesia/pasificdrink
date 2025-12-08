<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Theme Settings
            [
                'group' => 'theme',
                'key' => 'primary_color',
                'value' => '#2a9d8f',
                'type' => 'string',
                'description' => 'Warna tema utama'
            ],
            [
                'group' => 'theme',
                'key' => 'secondary_color',
                'value' => '#264653',
                'type' => 'string',
                'description' => 'Warna tema sekunder'
            ],
            [
                'group' => 'theme',
                'key' => 'dark_mode',
                'value' => 'false',
                'type' => 'boolean',
                'description' => 'Mode gelap'
            ],
            
            // WhatsApp Settings
            [
                'group' => 'whatsapp',
                'key' => 'phone_number',
                'value' => '6281234567890',
                'type' => 'string',
                'description' => 'Nomor WhatsApp admin'
            ],
            [
                'group' => 'whatsapp',
                'key' => 'default_message',
                'value' => 'Halo, saya ingin memesan minuman dari Pasifik Drink',
                'type' => 'string',
                'description' => 'Pesan default WhatsApp'
            ],
            [
                'group' => 'whatsapp',
                'key' => 'auto_reply',
                'value' => 'Terima kasih telah menghubungi Pasifik Drink. Pesanan Anda akan segera kami proses.',
                'type' => 'string',
                'description' => 'Autorespon WhatsApp'
            ],
            
            // Catalog Settings
            [
                'group' => 'catalog',
                'key' => 'layout',
                'value' => 'grid',
                'type' => 'string',
                'description' => 'Layout katalog'
            ],
            [
                'group' => 'catalog',
                'key' => 'show_prices',
                'value' => 'true',
                'type' => 'boolean',
                'description' => 'Tampilkan harga di katalog'
            ],
            [
                'group' => 'catalog',
                'key' => 'show_stock',
                'value' => 'true',
                'type' => 'boolean',
                'description' => 'Tampilkan stok di katalog'
            ],
            
            // Company Info
            [
                'group' => 'company',
                'key' => 'name',
                'value' => 'Pasifik Drink',
                'type' => 'string',
                'description' => 'Nama perusahaan',
                'is_public' => true
            ],
            [
                'group' => 'company',
                'key' => 'address',
                'value' => 'Jl. Contoh No. 123, Jakarta',
                'type' => 'string',
                'description' => 'Alamat perusahaan',
                'is_public' => true
            ],
            [
                'group' => 'company',
                'key' => 'phone',
                'value' => '021-1234567',
                'type' => 'string',
                'description' => 'Telepon perusahaan',
                'is_public' => true
            ],
            [
                'group' => 'company',
                'key' => 'email',
                'value' => 'info@pasifikdrink.com',
                'type' => 'string',
                'description' => 'Email perusahaan',
                'is_public' => true
            ],
            
            // SEO Settings
            [
                'group' => 'seo',
                'key' => 'meta_title',
                'value' => 'Pasifik Drink - Minuman Premium Terbaik',
                'type' => 'string',
                'description' => 'Meta title website'
            ],
            [
                'group' => 'seo',
                'key' => 'meta_description',
                'value' => 'Tersedia berbagai macam minuman premium seperti wine, vodka, whisky, dan mixer drink dengan kualitas terbaik.',
                'type' => 'string',
                'description' => 'Meta description website'
            ],
            
            // Social Media
            [
                'group' => 'social',
                'key' => 'instagram',
                'value' => 'https://instagram.com/pasifikdrink',
                'type' => 'string',
                'description' => 'Link Instagram',
                'is_public' => true
            ],
            [
                'group' => 'social',
                'key' => 'facebook',
                'value' => 'https://facebook.com/pasifikdrink',
                'type' => 'string',
                'description' => 'Link Facebook',
                'is_public' => true
            ],
            [
                'group' => 'social',
                'key' => 'tiktok',
                'value' => 'https://tiktok.com/@pasifikdrink',
                'type' => 'string',
                'description' => 'Link TikTok',
                'is_public' => true
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
 