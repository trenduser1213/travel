<?php

namespace App\Http\Controllers;

use App\Models\kategoriArtikel;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = kategoriArtikel::orderBy('id_kategori')->get();
        return view('admin.artikel.index')->with('kategoris',$kategoris);
        // dd($kategoris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambahKategori = kategoriArtikel::create(['nama_kategori_artikel'=>$request->nama_kategori]);
        $kategoris = kategoriArtikel::orderBy('id_kategori')->get();
        return view('admin.artikel.index')->with('kategoris',$kategoris);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategoriArtikel::find($id);

        return response()->json($kategori);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function edit(kategoriArtikel $kategoriArtikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = kategoriArtikel::find($id);
        $kategori->nama_kategori_artikel = $request->nama_kategori;
        $kategori->update();
        // $kategori->update($request->except(['_token','submit']));
        // dd($kategori) ;
        // dd($id);
        // $id->update(['nama_kategori_artikel'=>$request->nama_kategori]);
        // $kategoris = kategoriArtikel::orderBy('id_kategori')->get();
        return redirect('/adminArtikel')->with('success', 'telah tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategoriArtikel::find($id);
        $kategori->delete();
        return redirect('/adminArtikel');
    }
}
