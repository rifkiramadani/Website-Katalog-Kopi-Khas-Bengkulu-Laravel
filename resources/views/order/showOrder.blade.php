@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col md-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Kopi</th>
                    <th scope="col">Pemesan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $order->produk->nama }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->jumlah }}</td>
                        <td>{{ $order->total_harga }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection