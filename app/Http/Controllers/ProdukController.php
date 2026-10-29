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

    //edit -> menampilkan halaman update
    //update -> menjalankan fungsi edit data

    //destroy -> menghapus data
}
