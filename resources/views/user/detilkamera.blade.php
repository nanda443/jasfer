@extends('layout.template')

@section('content')
    <div class="pagetitle mb-0">
        <h1>{{ $title }}</h1>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/template/assets/css/detil.css') }}">
@endpush
@section('main')
    <div class="col-md-12 mx-auto"> <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-md-4 pb-5 cover">
                <div class="media align-items-end profile-head d-md-flex justify-content-md-start justify-content-center ">
                    <div class="profile mr-3 ">
                        <img src="{{ $kamera->foto }}" alt="..." width="200" class="rounded mb-2 img-thumbnail">
                    </div>
                    <div class="media-body mb-5 ms-0 ms-md-3 text-white">
                        <h2 class="mt-0 mb-0 fw-bold">{{ $kamera->nama }}</h3>
                            <p class="small"> <i
                                    class="fas fa-map-marker-alt mr-2 text-muted "></i>{{ $kamera->provider->nama }}
                            </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-md-end justify-content-center text-center">

            </div>
            <div class="px-4 py-3">
                <h5 class="mb-1 fw-bold ">Spesifikasi</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">{{ $kamera->spesifikasi }}</p>
                </div>
            </div>
            <div class="pt-0 pb-0 px-4">
                <div class="d-flex align-items-center justify-content-between mb-0 pb-0 ">
                    <h5 class="mb- fw-bold">Hasil Foto</h5>
                </div>
                <div class="row m-0 pb-3 pt-0 row-cols-1 row-cols-md-3 g-3 d-flex justify-content-center">
                    @foreach (json_decode($kamera->foto_karya) as $item)
                        <div class="col">
                            <img src="{{ $item }}" alt="" class="img-fluid rounded shadow-sm">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    <p class="card-text text-danger fw-bolder ms-auto ">Rp.
                        {{ number_format($kamera->harga, 0, ',', '.') }}/hari</p>
                </div>
                <div class="d-flex flex-row flex-nowrap accordion justify-content-between align-content-center ">
                    <a href="" class="btn btn-light border-primary px-1 "><i
                            class="bi bi-cart-check m-2"></i><span></span></a>
                    <a href="" class="btn btn-primary flex-fill px-1 ms-1  "><span>Pesan sekarang</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
