<?php

namespace App\Http\Controllers;

use App\Models\Produks;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produks::all();

        return view('pages.produk', compact('produks'));
    }

    public function show(int $id)
    {
        $produk = Produks::findOrFail($id);

        return view('pages.detail-produk', compact('produk'));
    }
}