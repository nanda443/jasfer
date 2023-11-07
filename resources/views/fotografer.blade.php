@extends('template')

@section('content')
<div class="pagetitle">
    <h1>Fotografer</h1>
</div>
  <!-- End Page Title -->
@endsection

@section('main')
{{-- ketikkan kode disini --}}
<div class="row m-0 row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('template/assets/img/fotografer/ade.jpg') }}" class="card-img-top rounded" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold pb-0 fs-5">Ade Eko ardiansyah</h5>
          <h6 class="card-subtitle mb-2 text-muted">Jogja Potret</h6>
          <p class="card-text mb-0">berpengalaman selama 5 tahun. Melayani acara wisuda, wedding, liburan dll.</p>
          <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
        </div>
        <div class="card-footer">
          <p class="card-text text-danger fw-bolder float-end">Rp. 100.000/hari</p>
          <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/fotografer/zikri.jpg') }}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold pb-0 fs-5">Ahmad Zikri</h5>
            <h6 class="card-subtitle mb-2 text-muted">Jogja Potret</h6>
            <p class="card-text mb-0">berpengalaman selama 5 tahun. Melayani acara wisuda, wedding, liburan dll.</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end">Rp. 150.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/fotografer/kemon.jpg') }}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold pb-0 fs-5">ALi Imron</h5>
            <h6 class="card-subtitle mb-2 text-muted">Jogja Potret</h6>
            <p class="card-text mb-0">berpengalaman selama 5 tahun. Melayani acara wisuda, wedding, liburan dll.</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end ">Rp. 90.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/fotografer/rakha.jpeg') }}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold pb-0 fs-5">Rakha Aryadi Pratama</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nanda Studio</h6>
            <p class="card-text mb-0">Percayakan moment berhargamu pada kami!</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end ">Rp. 200.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/fotografer/gupong.jpg') }}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold pb-0 fs-5">Kemon Putra Utama</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nanda Studio</h6>
            <p class="card-text mb-0">Percayakan moment berhargamu pada kami!</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end ">Rp. 400.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/fotografer/lukman.jpg') }}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold pb-0 fs-5">Eko Budi Santoso</h5>
            <h6 class="card-subtitle mb-2 text-muted">Eko Potography</h6>
            <p class="card-text mb-0">Jangan sia-siakan moment berharga dalam hidupmu! Pesan sekarang!</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end ">Rp. 100.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/messages-3.jpg') }}" class="card-img-top rounded" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold pb-0 fs-5">Hasan Junior</h5>
            <h6 class="card-subtitle mb-2 text-muted">Eko Potography</h6>
            <p class="card-text mb-0">Jangan sia-siakan moment berharga dalam hidupmu! Pesan sekarang!</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end ">Rp. 100.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
      </div>
  </div>
@endsection
