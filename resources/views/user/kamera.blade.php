@extends('layout.template')

@section('content')
    <div class="pagetitle mb-0">
        <h1>{{ $title }}</h1>
    </div>
@endsection

@section('main')
    <div class="row m-0 row-cols-1 row-cols-md-3 g-4">
        @foreach ($kameras as $kamera)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $kamera->foto }}" class="card-img-top rounded w-100 mx-auto " alt="...">
                    <div class="card-body pb-0">
                        <h5 class="card-title fw-bold pb-0 fs-5">{{ $kamera->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $kamera->provider->nama }}</h6>
                        <p class="card-text mb-0">{{ Str::limit($kamera->spesifikasi, 75, '...') }}</p>
                        <p class="card-text"><small class="text-muted"><a
                                    href="/Kamera/{{ $kamera->id }}">Detail</a></small>
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text text-danger fw-bolder float-end">Rp. {{ $kamera->harga }}/hari</p>
                        <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan
                                Sekarang</span></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-3">
        {{ $kameras->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
