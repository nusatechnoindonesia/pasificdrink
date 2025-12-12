<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo'; // nama tabel sesuai database

    protected $fillable = [
        'nama',
        'kode',
        'jenis',
        'nilai',
        'minimal_pembelian',
        'maksimal_diskon',
        'berlaku_untuk',
        'id_berlaku',
        'batas_penggunaan',
        'mulai_pada',
        'berakhir_pada',
        'status',
        'dibuat_pada'
    ];

    public $timestamps = false; // kalau kolom created_at / updated_at tidak dipakai
}
