@extends('layout.auth')

@section('auth')
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
            <a href="/" class="logo d-flex align-items-center w-auto">
                <img src="{{ asset('template/assets/img/logo1.png') }}" alt="">
                <span class="d-none d-lg-block">JasFer</span>
            </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

            <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Masukkan data diri untuk membuat akun</p>
                </div>

                <form action="/Register" method="POST" class="row g-3" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="yourName" class="form-label">Nama Pengguna</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="yourName" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="yourEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="yourEmail" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="yourPassword" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                    </div>
                    <div class="col-12 text-center ">
                        <p class="small mb-0">Sudah punya akun? <a href="/Login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
