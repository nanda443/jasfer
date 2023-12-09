<?php

namespace App\Http\Controllers;

use App\Models\Fotografer;
use Illuminate\Http\Request;

class FotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('user.fotografer', [
            'title' => 'Fotografer',
            'fotografers' => Fotografer::paginate(9)
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
        return view('user.detilfotografer', [
            'title' => 'Detail Fotografer',
            'fotografer' => $fotografer
        ]);
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
