@extends('layout.auth')

@section('auth')
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center " role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-3">
            <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                </div>

                <form action="/Login" method="POST" class="row g-3" novalidate>
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
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="yourPassword" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12 text-center ">
                        <p class="small mb-0">Don't have account? <a href="/Register">Create an account</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
