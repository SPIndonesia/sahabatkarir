<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Kategori::create([
            'nama' => $request->nama
        ]);

        return response('kategori berhasil ditambahkan');
    }

    public function get()
    {
        $data = Kategori::all();

        return response()->json($data);
    }
}
