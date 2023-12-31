<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->user();

        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();

        // Ambil user dari database berdasarkan email
        $userByEmail = User::where('email', $userFromGoogle->getEmail())->first();

        // Cek apakah ada user dengan email yang sama dan bukan login melalui Google
        if ($userByEmail && !$userFromDatabase) {
            // Redirect atau berikan pesan kesalahan sesuai kebutuhan
            return redirect()->route('login')->with('error', 'Akun dengan email ini sudah terdaftar. Silakan login secara manual.');
        }

        // Jika tidak ada user, maka buat user baru
        if (!$userFromDatabase) {
            $newUser = new User([
                'google_id' => $userFromGoogle->getId(),
                'name' => $userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
                'foto_profil' => $userFromGoogle->getAvatar(), // Menggunakan metode getAvatar() jika tersedia
            ]);

            $newUser->save();

            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();

            return redirect('/');
        } else {
            // Jika ada user langsung login saja
            auth('web')->login($userFromDatabase);
            session()->regenerate();

            return redirect('/');
        }
    }


    public function logout(Request $request)
    {
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
