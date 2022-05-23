<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data_kategori = Kategori::all();
        $data = [
            'judul' => 'Sahabat Karir | Kategori',
            'css' => ['kategori'],
            'js' => ['kategori'],
            'data_kategori' => $data_kategori,
        ];


        return view('kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('tambah ' . $request->nama);

        $data = Kategori::create(
            ['nama' => $request->nama]
        );
        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Kategori $kategori)
    // {
    //     dd('ubah' . $request->nama);

    //     $data = Kategori::updated([
    //         'nama' => $request->nama
    //     ]);
    // }

    public function ubah(Request $request, $id)
    {
        $data = Kategori::find($id)->update([
            'nama' => $request->nama
        ]);

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */





    public function destroy(Kategori $kategori, $id)
    {
        $data = Kategori::find($kategori->id)->delete();
        return redirect('/kategori');
    }


    public function hapus($id)
    {
        $data = Kategori::find($id)->delete();
        return redirect('/kategori');
    }
}
