<?php

namespace App\Http\Controllers;

use App\Models\productAdmin;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = productAdmin::orderBy('id')->get();
        return view('admin.produk.index')->with('produks',$produks);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productAdmin  $productAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(productAdmin $productAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productAdmin  $productAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(productAdmin $productAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productAdmin  $productAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productAdmin $productAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productAdmin  $productAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(productAdmin $productAdmin)
    {
        //
    }
}
