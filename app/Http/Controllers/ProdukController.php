<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\DetailProduk;

class ProdukController extends Controller
{
    public function index() {
        return view('produk',[
            'title' => 'Produk',
            'navtitle' => 'produk',
            'produks' => Produk::latest()->get()
        ]);
    }

    public function show(DetailProduk $detailproduk) {
        return view('detailproduk',[
            'title' => 'Detail Produk',
            'navtitle' => 'produk',
            'detailproduks' => $detailproduk->produk
        ]);
    }
}
