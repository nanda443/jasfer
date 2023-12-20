<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function tambahFotografer(Request $request)
    {
        //cek apakah fotografer sudah ada
        $existingItem = Cart::where(['fotografer_id' => $request->input('fotografer_id')])->where('user_id', auth()->user()->id)->first();

        if ($existingItem) {
            return redirect()->back()->with('info', 'Fotografer sudah ada di keranjang');
        }

        Cart::create([
            'user_id' => auth()->user()->id,
            'fotografer_id' => $request->input('fotografer_id')
        ]);

        return redirect()->back()->with('success', 'Fotografer berhasil ditambahkan ke keranjang');
    }

    public function tambahKamera(Request $request)
    {
        $existingItem = Cart::where(['kamera_id' => $request->input('kamera_id')])->where('user_id', auth()->user()->id)->first();

        if ($existingItem) {
            return redirect()->back()->with('info', 'Kamera sudah ada di keranjang');
        }

        Cart::create([
            'user_id' => auth()->user()->id,
            'kamera_id' => $request->input('kamera_id')
        ]);

        return redirect()->back()->with('success', 'Kamera berhasil ditambahkan ke keranjang');
    }

    public function index()
    {
        //
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
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        Cart::destroy([
            'id' => $request->input('id')
        ]);

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang');
    }
}
