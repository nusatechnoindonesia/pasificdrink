<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Promo;
use App\Models\Pesanan;

class DashboardController extends Controller
{
    public function index()
    {
        // Total Produk Aktif
        $totalProduk = Produk::where('status', 'aktif')->count();

        // Total Promo Aktif
        $totalPromo = Promo::where('status', 'aktif')->count();

        // Pesanan Hari Ini
$totalPesanan = Pesanan::whereMonth('dibuat_pada', now()->month)->count();

        // Pendapatan Bulan Ini (sum total_akhir)
        $totalPendapatan = Pesanan::where('status_pesanan', 'selesai')
            ->whereMonth('dibuat_pada', now()->month)
            ->sum('total_akhir');

        // Recent Activity - ambil 10 pesanan terbaru
        $pesananTerbaru = Pesanan::orderBy('dibuat_pada', 'desc')->limit(10)->get();

        return view('admin.dashboard', compact(
            'totalProduk',
            'totalPromo',
            'totalPesanan',
            'totalPendapatan',
            'pesananTerbaru',
        ));
    }
}
