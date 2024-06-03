@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
          @if (session()->has("pesanSuccess"))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('pesanSuccess') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
            @foreach ($produks as $produk)
            <div class="col-lg-3">
                <div class="card">
                    <img src="/img/kopihitam/{{ $produk->img }}" style="width: 254px; height: 360px;" class="card-img-top" alt="{{ $produk->slug }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $produk->nama }}</h5>
                      <p class="card-text">{{ $produk->excerpt }}.</p>
                      <p class="card-text">Rp.{{ number_format($produk->detailproduk->harga) }}.</p>
                      <a href="/detailproduk/{{ $produk->detailproduk->slug }}" style="height 40px;" class="btn btn-dark d-block mb-1">Selangkapnya</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection