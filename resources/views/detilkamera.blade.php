@extends('template')

@section('content')
    <div class="pagetitle mb-0">
        <h1>Kamera</h1>
    </div>
@endsection

@section('main')
    <div class="card h-100">
        <img src="{{ $kamera->foto }}" class="card-img-top rounded w-75 mx-auto " alt="...">
        <div class="card-body pb-0">
            <h5 class="card-title fw-bold pb-0 fs-5">{{ $kamera->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $kamera->provider->nama }}</h6>
            <p class="card-text mb-0">{{ $kamera->deskripsi }}</p>
        </div>
        <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end">Rp. {{ $kamera->harga }}/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan
                    Sekarang</span></button>
        </div>
    </div>
@endsection
