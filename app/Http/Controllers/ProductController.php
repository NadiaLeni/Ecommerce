<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function createProduk(Request $request){

        products::create([
            'namaProduk' => $request->namaProduk,
            'deskripsi' => $request->deskripsi,
            'namaToko' => $request->namaToko,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/admin');
    }

    public function getProduk(){
        $produk = products::all();
        return view('admin', ['produk' => $produk]);
    }
}
