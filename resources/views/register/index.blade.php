@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-3">
        <div class="col-md-4">
            <form action="/register" method="post">
                @csrf
                <h3 class="text-center">Silahkan Register</h3>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name') 
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                  </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                  </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email') 
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password') 
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror 
                  </div>

                  <button class="btn btn-primary w-100 py-2" type="submit"> Register</button>
                  <small class="d-block text-center mt-3">Already Registered <a href="/login">Login</a></small>
            </form>
        </div>
    </div>
@endsection