@extends('template')

@section('content')
<div class="pagetitle">
    <h1>Kamera</h1>
</div>
@endsection

@section('main')
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card mb-4 h-100">
            <img src="{{ asset('template/assets/img/sonya6000.jpg') }}" class="card-img-top center" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sony a6000</h5>
                <p class="card-text">Rp.300.000/Hari</p>
                <p class="card-text">Nanda Kamera</p>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <a href="#" class="btn btn-primary">Booking Now</a>
                    <a href="#" class="card-link">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 h-100">
            <img src="{{ asset('template/assets/img/sonya7.jpg') }}" class="card-img-top center" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sony a7</h5>
                <p class="card-text">Rp.500.000/Hari</p>
                <p class="card-text">Rakha Kamera</p>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <a href="#" class="btn btn-primary">Booking Now</a>
                    <a href="#" class="card-link">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 h-100">
            <img src="{{ asset('template/assets/img/m50.jpg') }}" class="card-img-top center" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos M50</h5>
                <p class="card-text">Rp.350.000/Hari</p>
                <p class="card-text">Ade Kamera</p>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <a href="#" class="btn btn-primary">Booking Now</a>
                    <a href="#" class="card-link">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 h-100">
            <img src="{{ asset('template/assets/img/rp.jpg') }}" class="card-img-top center" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos RP</h5>
                <p class="card-text">Rp.500.000/Hari</p>
                <p class="card-text">Nanda Kamera</p>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <a href="#" class="btn btn-primary">Booking Now</a>
                    <a href="#" class="card-link">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 h-100">
            <img src="{{ asset('template/assets/img/m6.jpg') }}" class="card-img-top center" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos M6</h5>
                <p class="card-text">Rp.250.000/Hari</p>
                <p class="card-text">Rakha Kamera</p>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <a href="#" class="btn btn-primary">Booking Now</a>
                    <a href="#" class="card-link">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 h-100">
            <img src="{{ asset('template/assets/img/r6.jpg') }}" class="card-img-top center" alt="...">
            <div class="card-body">
                <h5 class="card-title">Canon Eos R6</h5>
                <p class="card-text">Rp.550.000/Hari</p>
                <p class="card-text">Ade Kamera</p>
                <div class="position-absolute bottom-0 end-0 p-3">
                    <a href="#" class="btn btn-primary">Booking Now</a>
                    <a href="#" class="card-link">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection