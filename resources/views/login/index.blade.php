@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-3">
        <div class="col-md-4">
            @if (session()->has("loginFailed"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginFailed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session()->has("registerSuccess"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('registerSuccess') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <h3 class="text-center">Silahkan Login</h3>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="password" name="password">
                  </div>

                  <button class="btn btn-primary w-100 py-2" type="submit"> Login</button>
                  <small class="d-block text-center mt-3">Not Registered <a href="/register">Register Now</a></small>
            </form>
        </div>
    </div>
@endsection