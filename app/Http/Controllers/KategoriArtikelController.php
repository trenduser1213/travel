<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
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
        $kategoris = CategoryPost::orderBy('id')->get();
        return view('admin.artikel.kategori')->with('kategoris',$kategoris);
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
        $tambahKategori = CategoryPost::create([
            'nama'=>$request->nama_kategori,
            'slug'=>$request->slug,
        ]);
        return redirect('/CategoryPost')->with('success', 'telah tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryPost  $CategoryPost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = CategoryPost::find($id);

        return response()->json($kategori);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryPost  $CategoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $CategoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryPost  $CategoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = CategoryPost::find($id);
        $kategori->nama = $request->nama_kategori;
        $kategori->slug = $request->slug;
        $kategori->update();
        // $kategori->update($request->except(['_token','submit']));
        // dd($kategori) ;
        // dd($id);
        // $id->update(['nama_kategori_artikel'=>$request->nama_kategori]);
        // $kategoris = CategoryPost::orderBy('id_kategori')->get();
        return redirect('/CategoryPost')->with('success', 'telah tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryPost  $CategoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = CategoryPost::find($id);
        $kategori->delete();
        return response(null, 204);
    }
}
