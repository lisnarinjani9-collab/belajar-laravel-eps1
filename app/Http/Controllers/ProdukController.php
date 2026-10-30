<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //index -> menampilkan halaman utama
    public function index()
    {
        $produk = Produk::get();
        return view('produk.pages.produk', compact('produk'));
    }

    //create -> menampilkan halaman tambah
    public function create()
    {
        return view('produk.pages.tambah');
    }
    //store -> menjalankan fungsi edit data
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:100',
            'harga_produk' => 'required|integer',
            'kondisi_produk' => 'required|in:Bagus,Rusak',
        ]);
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'kondisi_produk' => $request->kondisi_produk,
        ]);
    }

    //edit -> menampilkan halaman update
    //update -> menjalankan fungsi edit data

    //destroy -> menghapus data
}
