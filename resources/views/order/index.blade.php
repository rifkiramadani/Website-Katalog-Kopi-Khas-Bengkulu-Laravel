@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="/pesanan" method="post">
            @csrf
            <h3>Pesan Barang</h3>
                <div class="form-group">
                    <label for="jumlah">Kuantitas:</label>
                    <input type="number" id="jumlah" name="jumlah" class="form-control w-500" value="1" min="1">
                </div>
                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                <button type="submit" class="btn btn-primary mt-3">Buat Pesanan</button>
            </form>
        </div>
    </div>
@endsection