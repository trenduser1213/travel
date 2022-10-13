<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class adminProdukController extends Controller
{
    public function index(){
        $data = ['produk' => Produk::all(),];

        return view('admin.produk.index', $data);
    }

    public function create(){
        return view('admin.produk.add');
    }

    public function edit(Produk $produk_id){

        $data = [
            'produk' => Produk::where('id', $produk_id)->first(),
        ];

        // dd($produk_id);

        return view('admin.produk.edit', $data);
    }

    public function store(){

        //validasi inputan
        $validatedData = Request()->validate([
            'nama' => 'unique',
            'slug' => 'unique',
        ]);
    }
}
