<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    
    protected $fillable = [
        'kategori_id',
        'kode_sku',
        'nama',
        'slug',
        'deskripsi',
        'gambar',
        'galeri',
        'harga_retail',
        'harga_grosir',
        'min_grosir',
        'satuan',
        'ukuran',
        'konten_alkohol',
        'merk',
        'stok',
        'status_stok',
        'status',
        'favorit',
        'terlaris',
        'baru'
    ];

    protected $casts = [
        'galeri' => 'array',
        'favorit' => 'boolean',
        'terlaris' => 'boolean',
        'baru' => 'boolean',
        'harga_retail' => 'decimal:2',
        'harga_grosir' => 'decimal:2',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_id');
    }
}