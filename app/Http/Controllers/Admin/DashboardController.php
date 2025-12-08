<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use App\Models\KategoriProduk;

class DashboardController extends Controller
{
    public function index()
    {
        $statistik = DB::table('dashboard_statistik')->first();

        $produkTerlaris = Produk::with('kategori')
            ->where('status', 'aktif')
            ->orderBy('jumlah_dipesan', 'desc')
            ->limit(5)
            ->get();

        $pesananTerbaru = Pesanan::orderBy('dibuat_pada', 'desc')
            ->limit(10)
            ->get();

        $produkStokSedikit = Produk::with('kategori')
            ->where('status', 'aktif')
            ->where('stok', '<=', 5)
            ->orderBy('stok', 'asc')
            ->get();

        $penjualanHarian = DB::table('laporan_harian')
            ->orderBy('tanggal', 'desc')
            ->limit(7)
            ->get();

        return view('admin.dashboard', compact(
            'statistik',
            'produkTerlaris',
            'pesananTerbaru',
            'produkStokSedikit',
            'penjualanHarian'
        ));
    }
}
