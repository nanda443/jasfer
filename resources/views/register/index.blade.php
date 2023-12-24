@extends('layout.auth')

@section('auth')
    <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
            <a href="/" class="logo d-flex align-items-center w-auto">
                <img src="{{ asset('template/assets/img/logo1.png') }}" alt="">
                <span class="d-none d-lg-block">JasFer</span>
            </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

            <div class="card-body">

                <div class="pt-3 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4">Registrasi</h5>
                    <p class="text-center small">Masukkan data diri untuk membuat akun</p>
                </div>

                <form action="/Register" method="POST" class="row g-3" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                required value="{{ old('name') }}" id="floatingName" placeholder="Nama Pengguna">
                            <label for="floatingName">Nama Pengguna</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                required value="{{ old('email') }}" id="floatingEmail" placeholder="Email">
                            <label for="floatingEmail">Email</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" required id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="number" name="no_hp"
                                    class="form-control @error('no_hp') is-invalid @enderror" id="floatingCity"
                                    placeholder="Nomor HP" value="{{ old('no_hp') }}" required>
                                <label for="floatingCity">Nomor HP</label>
                                @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                placeholder="Alamat" value="{{ old('alamat') }}" id="floatingTextarea" required>
                            <label for="floatingTextarea">Alamat</label>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="formFile" class="form-label">Foto Profil</label>
                        <input id="file-input" name="foto_profil"
                            class="form-control @error('foto_profil') is-invalid @enderror" type="file" id="formFile"
                            accept="image/*">
                        @error('foto_profil')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Registrasi</button>
                    </div>
                    <div class="col-12 text-center ">
                        <p class="small mb-0">Sudah punya akun? <a href="/Login">Login</a></p>
                    </div>
                </form>

                <!-- Modal Cropper -->
                <div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cropModalLabel">Crop Foto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="" alt="Crop" id="cropImage" style="max-width: 100%;" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="cropButton">Potong</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

<!-- resources/views/auth/register.blade.php atau file lainnya -->
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('file-input');
            const modal = new bootstrap.Modal(document.getElementById('cropModal'));
            let cropper;

            input.addEventListener('change', function(e) {
                const file = e.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        // Set src image dan tampilkan modal
                        document.getElementById('cropImage').src = event.target.result;
                        modal.show();

                        cropper = new Cropper(document.getElementById('cropImage'), {
                            aspectRatio: 1,
                            viewMode: 1,
                            dragMode: 'move',
                            autoCropArea: 0.8,
                            cropBoxResizable: true,
                        });

                        // Cropping secara otomatis tanpa memerlukan interaksi pengguna
                        autoCrop();
                    };

                    reader.readAsDataURL(file);
                }
            });

            // Deteksi ketika modal tertutup
            modal._element.addEventListener('hidden.bs.modal', function() {
                autoCrop();
            });

            // Event listener untuk tombol potong
            document.getElementById('cropButton').addEventListener('click', function() {
                autoCrop();
                modal.hide();
            });

            // Fungsi untuk melakukan cropping
            function autoCrop() {
                // Dapatkan hasil cropping
                const croppedCanvas = cropper.getCroppedCanvas();

                // Setelah mendapatkan canvas, Anda dapat mengirimnya ke server atau melakukan hal lain sesuai kebutuhan Anda.
                // Misalnya, Anda dapat menggunakan AJAX untuk mengirim data ke server.

                // Contoh: Simpan canvas sebagai data URL
                const croppedDataURL = croppedCanvas.toDataURL('image/jpeg');
                // Gunakan data URL ini sesuai kebutuhan Anda.

                // Hapus elemen input tersembunyi jika sudah ada
                const existingHiddenInput = document.querySelector('input[name="cropped_image"]');
                if (existingHiddenInput) {
                    existingHiddenInput.remove();
                }

                // Tambahkan input tersembunyi untuk menyimpan data URL di formulir.
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'cropped_image';
                hiddenInput.value = croppedDataURL;
                document.querySelector('form').appendChild(hiddenInput);
            }
        });
    </script>
@endsection
