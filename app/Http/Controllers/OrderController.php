<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\DetailProduk;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index() {
        return view('order.showOrder', [
            'orders' => Order::all(),
            'title' => 'Pesanan Anda',
            'navtitle' => 'pesanan'
        ]);
    }


    public function create($produk_id) {
        $produk = Produk::findOrFail($produk_id);
        return view('order.index', [
            'produk' => $produk,
            'title' => 'Pesanan',
            'navtitle' => 'produk'
        ]);
    }

    public function store(Request $request)
    {
        // Mengubah 'id' menjadi 'produk_id' pada validasi
        $validatedData = $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Mengambil produk berdasarkan produk_id
        $produk = DetailProduk::findOrFail($validatedData['produk_id']);
        $total_harga = $produk->harga * $validatedData['jumlah'];

        // Buat pesanan baru
        $pesanan = new Order();
        $pesanan->user_id = Auth::id(); // Mendapatkan ID pengguna yang sedang login
        $pesanan->produk_id = $validatedData['produk_id'];
        $pesanan->jumlah = $validatedData['jumlah'];
        $pesanan->tanggal = Carbon::now();
        $pesanan->total_harga = $total_harga;
        $pesanan->save();
    
        // Umpan balik ke pengguna
        return redirect('/produk')->with('pesanSuccess', 'Pesanan Anda berhasil dibuat!');
    }
}
