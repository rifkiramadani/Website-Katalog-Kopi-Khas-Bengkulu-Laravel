@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center grid mt-3">
        <div class="card">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="/img/kopihitam/{{ $detailproduks->img }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{ $detailproduks->nama }}</h5>
                <p class="card-text">{{ $detailproduks->detailproduk->deskripsi }}</p>
                <p class="card-text">Rp.{{ $detailproduks->detailproduk->harga }}</p>
                <a href="/pesanan/{{ $detailproduks->detailproduk->id }}" class="btn btn-success d-block">Pesan</a>
                <p class="card-text text-center mt-2"><a href="/produk">Kembali Ke Halaman Katalog Produk</a></p>
                </div>
            </div>
            </div>
        </div>
</div>
@endsection