@extends('layout.template')

@section('content')
    <div class="pagetitle mb-0">
        <h1>{{ $title }}</h1>
    </div>
    <!-- End Page Title -->
@endsection

@section('main')
    {{-- ketikkan kode disini --}}
    <div class="row m-0 row-cols-1 row-cols-md-3 g-4">
        @foreach ($fotografers as $fotografer)
            <div class="col my-2 ">
                <div class="card h-100">
                    <img src="{{ $fotografer->foto }}" class="shadow card-img-top w-75 mx-auto mt-3 rounded-circle "
                        alt="...">
                    <div class="card-body pb-0">
                        <h5 class="card-title fw-bold pb-0 fs-5">{{ $fotografer->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $fotografer->provider->nama }}</h6>
                        <p class="card-text mb-0">{{ Str::limit($fotografer->deskripsi, 75, '...') }}</p>
                        <p class="card-text"><small class="text-muted"><a
                                    href="/Fotografer/{{ $fotografer->id }}">Detail</a></small></p>
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
        @endforeach
    </div>
    <div class="mt-3">
        {{ $fotografers->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
