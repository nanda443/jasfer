<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Registrasi'
        ]);
    }

    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => ['required', 'min:8', 'max:20'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
            'no_hp' => ['required', 'min:8', 'max:13', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'alamat' => ['required', 'max:255'],
            'foto_profil' => ['image', 'mimes:jpeg,png,jpg,gif']
        ]);

        // Buat user
        $user = User::create($validatedData);

        // Proses foto profil jika diunggah
        if ($request->hasFile('foto_profil')) {
            // Dapatkan data URL dari hasil cropping
            $croppedImage = $request->input('cropped_image');

            // Dekode data URL menjadi base64 dan simpan sebagai file
            list($type, $croppedImage) = explode(';', $croppedImage);
            list(, $croppedImage) = explode(',', $croppedImage);
            $croppedImage = base64_decode($croppedImage);

            // Simpan foto di direktori storage/app
            $filename = 'cropped_' . time() . '.png'; // Ganti ekstensi sesuai kebutuhan
            Storage::put('public/uploads/foto_profil/' . $filename, $croppedImage);

            // Dapatkan URL lengkap file foto profil dan simpan di basis data
            $fotoProfilUrl = asset('storage/uploads/foto_profil/' . $filename);
            $user->update(['foto_profil' => $fotoProfilUrl]);
        }


        return redirect('/Login')->with('success', 'Registrasi berhasil, silahkan login!');
    }
}
