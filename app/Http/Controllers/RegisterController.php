<?php

namespace App\Http\Controllers;

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
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
        ]);

        User::create($validatedData);

        return redirect('/Login')->with('success', 'Registrasi berhasil, silahkan login!');
    }
}
