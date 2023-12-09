@extends('layout.template')

@section('content')
    <div class="pagetitle">
        <h1>{{ $title }}/Fotografer</h1>
    </div>
    <!-- End Page Title -->
@endsection

@section('main')
    {{-- ketikkan kode disini --}}
    <div class="row m-0 row-cols-1 row-cols-md-3 g-4">
        @foreach ($fotografers as $fotografer)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $fotografer->foto }}" class="card-img-top w-75 mx-auto mt-3 rounded-circle " alt="...">
                    <div class="card-body pb-0">
                        <h5 class="card-title fw-bold pb-0 fs-5">{{ $fotografer->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $fotografer->provider->nama }}</h6>
                        <p class="card-text mb-0">{{ Str::limit($fotografer->deskripsi, 75, '...') }}</p>
                        <p class="card-text"><small class="text-muted"><a
                                    href="/Fotografer/{{ $fotografer->id }}">Detail</a></small></p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text text-danger fw-bolder float-end">Rp. {{ $fotografer->harga }}/hari</p>
                        <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan
                                Sekarang</span></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-3">
        {{ $fotografers->links('vendor.pagination.bootstrap-5') }}
    </div>


    <div class="pagetitle mt-3">
        <h1>Produk/Kamera</h1>
    </div>
    <div class="row m-0 row-cols-1 row-cols-md-3 g-4">
        @foreach ($kameras as $kamera)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $kamera->foto }}" class="card-img-top rounded w-100 mx-auto " alt="...">
                    <div class="card-body pb-0">
                        <h5 class="card-title fw-bold pb-0 fs-5">{{ $kamera->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $kamera->provider->nama }}</h6>
                        <p class="card-text mb-0">{{ $kamera->deskripsi }}</p>
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
