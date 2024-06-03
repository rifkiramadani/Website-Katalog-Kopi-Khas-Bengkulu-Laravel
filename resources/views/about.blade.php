@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <img src="/img/profil/{{ $fotorifky }}" style="width: 254px; height: 360px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Muhammad Rifky Ramadani</h5>
                  <p class="card-text">G1F022039</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img src="/img/profil/{{ $fotosalman }}" style="width: 254px; height: 360px;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Muhammad Salman Alfarizi</h5>
                      <p class="card-text">G1F022047</p>
                    </div>
                  </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img src="/img/profil/{{ $fotoarief }}" style="width: 254px; height: 360px;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Arief Haris Prasetyo Rizaldi</h5>
                      <p class="card-text">G1F022073</p>
                    </div>
                  </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <img src="/img/profil/{{ $fotoabrar }}" style="width: 254px; height: 360px;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Muhammad Abrar Atha Raif</h5>
                      <p class="card-text">Z1K0023129</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    @endsection

