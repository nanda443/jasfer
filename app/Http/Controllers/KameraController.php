<?php

namespace App\Http\Controllers;

use App\Models\Kamera;
use App\Models\Cart;
use Illuminate\Http\Request;

class KameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        if ($request->search) {
            $kameras = Kamera::search($request->search)->paginate(9);
        } else {
            $kameras = Kamera::paginate(9);
        }
        return view('user.kamera', [
            'title' => 'Kamera',
            'kameras' => $kameras
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamera $kamera)
    {
        //
        return view('user.detilkamera', [
            'title' => 'Detail Kamera',
            'kamera' => $kamera
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamera $kamera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kamera $kamera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamera $kamera)
    {
        //
    }
}
