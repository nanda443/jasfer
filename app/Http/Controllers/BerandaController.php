<?php

namespace App\Http\Controllers;

use App\Models\Fotografer;
use App\Models\Kamera;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('beranda', [
            'title' => 'beranda',
            'fotografers' => Fotografer::all(),
            'kameras' => Kamera::all()
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
    public function show(Fotografer $fotografer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fotografer $fotografer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fotografer $fotografer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fotografer $fotografer)
    {
        //
    }
}
