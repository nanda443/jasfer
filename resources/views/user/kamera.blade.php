@extends('layout.template')

@section('content')
    <div class="pagetitle mb-0">
        <h1>{{ $title }}</h1>
    </div>
@endsection

@section('main')
    <div class="row m-0 row-cols-1 row-cols-md-3 g-4">
        @foreach ($kameras as $kamera)
            <div class="col my-2 ">
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
                        <div class="d-flex">
                            <p class="card-text text-danger fw-bolder ms-auto ">Rp.
                                {{ number_format($kamera->harga, 0, ',', '.') }}/hari</p>
                        </div>
                        <div class="d-flex flex-row flex-nowrap accordion justify-content-between align-content-center ">
                            <form action="{{ route('keranjang.tambah.kamera') }}" method="post">
                                @csrf
                                <input type="hidden" name="kamera_id" value="{{ $kamera->id }}">
                                <button type="submit" class="btn btn-light border-primary px-1"><i
                                        class="bi bi-cart-plus m-2"></i></button>
                            </form>
                            <a href="" class="btn btn-primary flex-fill px-1 ms-1  "><span>Pesan sekarang</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-3">
        {{ $kameras->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
