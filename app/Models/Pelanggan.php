<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'whatsapp',
        'alamat',
        'kota',
        'provinsi',
        'jenis_pelanggan',
        'diskon_reseller',
        'status'
    ];

    protected $casts = [
        'diskon_reseller' => 'decimal:2',
        'total_belanja' => 'decimal:2',
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'pelanggan_id');
    }
}