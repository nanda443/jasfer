@extends('template')

@section('content')
<div class="pagetitle">
    <h1>Produk</h1>
</div>
  <!-- End Page Title -->
@endsection

@section('main')
{{-- ketikkan kode disini --}}
<div class="pagetitle mt-3">
    <h1>Kamera</h1>
</div>

<div class="row m-0 row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('template/assets/img/kamera/sonya7.jpg') }}" class="card-img-top rounded w-75 mx-auto " alt="...">
        <div class="card-body pb-0">
          <h5 class="card-title fw-bold pb-0 fs-5">Sony A7</h5>
          <h6 class="card-subtitle mb-2 text-muted">Jogja Potret</h6>
          <p class="card-text mb-0">Sony A7 menjadi Kamera Sony Full Frame Terbaik keluaran pertama yang dirilis oleh Sony.</p>
          <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
        </div>
        <div class="card-footer">
          <p class="card-text text-danger fw-bolder float-end">Rp. 200.000/hari</p>
          <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/kamera/sonya6000.jpg') }}" class="card-img-top rounded w-75 mx-auto" alt="...">
          <div class="card-body pb-0">
            <h5 class="card-title fw-bold pb-0 fs-5">Sony A6000</h5>
            <h6 class="card-subtitle mb-2 text-muted">Jogja Potret</h6>
            <p class="card-text mb-0">Kamera yang dikenal dapat menghasilkan gambar dengan resolusi tinggi.</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end">Rp. 300.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/kamera/m6.jpg') }}" class="card-img-top rounded w-75 mx-auto" alt="...">
          <div class="card-body pb-0">
            <h5 class="card-title fw-bold pb-0 fs-5">Canon Eos M50</h5>
            <h6 class="card-subtitle mb-2 text-muted">Jogja Potret</h6>
            <p class="card-text mb-0">berpengalaman selama 5 tahun. Melayani acara wisuda, wedding, liburan dll.</p>
            <p class="card-text"><small class="text-muted"><a href="">Detail</a></small></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-danger fw-bolder float-end ">Rp. 150.000/hari</p>
            <button type="button" class="btn btn-primary w-100"><i class="bi bi-cart-check m-2"></i><span>pesan Sekarang</span></button>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
          <img src="{{ asset('template/assets/img/kamera/m6.jpg') }}" class="card-img-top rounded w-75 mx-auto" alt="...">
          <div class="card-body pb-0">
            <h5 class="card-title fw-bold pb-0 fs-5">Canon Eos M6</h5>
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
          <img src="{{ asset('template/assets/img/kamera/r6.jpg') }}" class="card-img-top rounded w-75 mx-auto" alt="...">
          <div class="card-body pb-0">
            <h5 class="card-title fw-bold pb-0 fs-5">Canon Eos R6</h5>
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
          <img src="{{ asset('template/assets/img/kamera/sonya7.jpg') }}" class="card-img-top rounded w-75 mx-auto" alt="...">
          <div class="card-body pb-0">
            <h5 class="card-title fw-bold pb-0 fs-5">Sony A7</h5>
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

<div class="pagetitle mt-3">
    <h1>Fotografer</h1>
</div>

<div class="row m-0 row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('template/assets/img/fotografer/ade.jpg') }}" class="card-img-top w-75 mx-auto mt-3 rounded-circle " alt="...">
        <div class="card-body pb-0">
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
          <img src="{{ asset('template/assets/img/fotografer/zikri.jpg') }}" class="card-img-top w-75 mx-auto mt-3 rounded-circle " alt="...">
          <div class="card-body pb-0">
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
          <img src="{{ asset('template/assets/img/fotografer/kemon.jpg') }}" class="card-img-top w-75 mx-auto mt-3 rounded-circle " alt="...">
          <div class="card-body pb-0">
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
          <img src="{{ asset('template/assets/img/fotografer/rakha.jpeg') }}" class="card-img-top w-75 mx-auto mt-3 rounded-circle " alt="...">
          <div class="card-body pb-0">
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
          <img src="{{ asset('template/assets/img/fotografer/gupong.jpg') }}" class="card-img-top w-75 mx-auto mt-3 rounded-circle " alt="...">
          <div class="card-body pb-0">
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
          <img src="{{ asset('template/assets/img/fotografer/lukman.jpg') }}" class="card-img-top w-75 mx-auto mt-3 rounded-circle " alt="...">
          <div class="card-body pb-0">
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
</div>

@endsection
