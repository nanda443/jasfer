@extends('template')

@section('content')
    <div class="pagetitle mb-0">
        <h1>Fotografer</h1>
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
                        <p class="card-text mb-0">{{ $fotografer->deskripsi }}</p>
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
@endsection
