<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_paket = Paket::all();
        return view('paket.paket', compact('data_paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = Kategori::all();
        return view('paket.tambahpaket', compact('data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_paket = new Paket;
        $data_paket->nama = $request->nama;
        $data_paket->harga = $request->harga;
        $data_paket->deskripsi = $request->deskripsi;
        $data_paket->id_kategori = $request->id_kategori;
        $data_paket->save();
        $data_paket = Paket::all();
        return view('paket.paket', compact('data_paket'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */


    public function destroy(Paket $paket)
    {
        $data = Paket::find($paket);
        $data->delete();
        return redirect()->back();
    }
}
