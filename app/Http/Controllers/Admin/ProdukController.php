<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Promo;
use App\Models\Pesanan;

class DashboardController extends Controller
{
    public function index()
    {
        // Ringkasan
        $totalProduk = Produk::where('status', 'aktif')->count();
        $totalPromo = Promo::where('status', 'aktif')->count();
        $totalPesanan = Pesanan::whereDate('dibuat_pada', now()->toDateString())->count();
        $totalPendapatan = Pesanan::where('status_pesanan', 'selesai')
            ->whereMonth('dibuat_pada', now()->month)
            ->sum('total_akhir');

        // Produk terbaru (10)
        $produk = Produk::with('kategori')->orderBy('id', 'desc')->take(10)->get();

        return view('admin.dashboard', compact(
            'totalProduk',
            'totalPromo',
            'totalPesanan',
            'totalPendapatan',
            'produk'
        ));
    }


    // Simpan produk baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'kategori_id' => 'required|exists:kategori_produk,id',
            'harga_retail' => 'required|numeric',
            'harga_grosir' => 'required|numeric',
            'min_grosir' => 'required|numeric',
            'stok' => 'required|numeric',
            'ukuran' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $filename);
            $data['gambar'] = $filename;
        }

        Produk::create($data);
        return response()->json(['success' => true]);
    }

    // Ambil data produk untuk edit
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = KategoriProduk::all();
        return view('admin.edit_produk', compact('produk', 'kategori'));
    }

    // Update produk
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string',
            'kategori_id' => 'required|exists:kategori_produk,id',
            'harga_retail' => 'required|numeric',
            'harga_grosir' => 'required|numeric',
            'min_grosir' => 'required|numeric',
            'stok' => 'required|numeric',
            'ukuran' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/produk'), $filename);
            $data['gambar'] = $filename;
        }

        $produk->update($data);
        return response()->json(['success' => true]);
    }

    // Hapus produk
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return response()->json(['success' => true]);
    }
}
