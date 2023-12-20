{{-- @dd($fotografer) --}}
@extends('layout.template')

@section('content')
    <div class="pagetitle mb-2">
        <h1>{{ $title }}</h1>
    </div>
    <!-- End Page Title -->
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
                        <img src="{{ $fotografer->foto }}" alt="..." width="200" class="rounded mb-2 img-thumbnail">
                    </div>
                    <div class="media-body mb-5 ms-0 ms-md-3 text-white">
                        <h2 class="mt-0 mb-0 fw-bold">{{ $fotografer->nama }}</h3>
                            <p class="small"> <i
                                    class="fas fa-map-marker-alt mr-2 text-muted "></i>{{ $fotografer->provider->nama }}
                            </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-md-end justify-content-center text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="mx-2 nav-link p-2" href="#">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="mx-2 btn nav-link p-2" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="mx-2 btn nav-link p-2" href="#">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-1 fw-bold ">Tentang Saya</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">{{ $fotografer->deskripsi }}</p>
                </div>
            </div>
            <div class="pt-0 pb-0 px-4">
                <div class="d-flex align-items-center justify-content-between mb-0 pb-0 ">
                    <h5 class="mb- fw-bold">Karya</h5>
                </div>
                <div class="row m-0 pb-3 pt-0 row-cols-1 row-cols-md-3 g-3 d-flex justify-content-center">
                    @foreach (json_decode($fotografer->foto_karya) as $item)
                        <div class="col">
                            <img src="{{ $item }}" alt="" class="img-fluid rounded shadow-sm">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex">
                    <p class="card-text text-danger fw-bolder ms-auto ">Rp.
                        {{ number_format($fotografer->harga, 0, ',', '.') }}/hari</p>
                </div>
                <div class="d-flex flex-row flex-nowrap accordion justify-content-between align-content-center ">
                    <form action="{{ route('keranjang.tambah.fotografer') }}" method="post">
                        @csrf
                        <input type="hidden" name="fotografer_id" value="{{ $fotografer->id }}">
                        <button type="submit" class="btn btn-light border-primary px-1"><i
                                class="bi bi-cart-plus m-2"></i></button>
                    </form>
                    <a href="" class="btn btn-primary flex-fill px-1 ms-1  "><span>Pesan sekarang</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
