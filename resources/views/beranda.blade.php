@extends('template')

@section('content')

@endsection

@section('main')
{{-- ketikkan kode disini --}}
<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src="{{ asset('template/assets/img/4.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('template/assets/img/2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('template/assets/img/3.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
  </div>
  <div class="pagetitle mt-3">
    <h1>Fotografer</h1>
</div>

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


  <div class="pagetitle mt-3">
      <h1>Kamera</h1>
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


@endsection
