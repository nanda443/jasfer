@extends('layout.auth')

@section('auth')
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center py-4">
            <a href="/" class="logo d-flex align-items-center w-auto">
                <img src="{{ asset('template/assets/img/logo1.png') }}" alt="">
                <span class="d-none d-lg-block">JasFer</span>
            </a>
        </div>
        <div class="card mb-3">
            <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
                    <p class="text-center small">Masukkan email untuk reset password</p>
                </div>

                <form action="#" method="POST" class="row g-3" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Reset Password</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
