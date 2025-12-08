<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    
    protected $fillable = [
        'nomor_pesanan',
        'pelanggan_id',
        'nama_pelanggan',
        'telepon_pelanggan',
        'alamat_pengiriman',
        'item',
        'subtotal',
        'biaya_pengiriman',
        'total_diskon',
        'total_pajak',
        'total_akhir',
        'metode_pembayaran',
        'status_pembayaran',
        'status_pesanan',
        'catatan'
    ];

    protected $casts = [
        'item' => 'array',
        'subtotal' => 'decimal:2',
        'biaya_pengiriman' => 'decimal:2',
        'total_diskon' => 'decimal:2',
        'total_pajak' => 'decimal:2',
        'total_akhir' => 'decimal:2',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
}