<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MengapaKami;

use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;

class adminMengapaKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'MengapaKami' => MengapaKami::all()     
        ];
        return view('admin.MengapaKami.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.MengapaKami.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'icon' => 'required',
            'teks1' => 'required', 
            'is_tampil'=> 'required',
        ]);

        $input = new MengapaKami();
        $input->judul = $request->judul;
        $input->deskripsi = $request->teks1;
        $input->icon = $request->icon;
        $input->is_tampil = $request->is_tampil;
        $input->save();
        Alert::success('Success', 'Sukses menambahkan');
        return redirect()->route('adminMengapaKami.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
        {   
            $data = [
                'MengapaKami' => DB::table('mengapa_kamis')->where('id', $id)->first()
            ];
        // $MengapaKami = DB::table('mengapa_kamis')->where('id', $id)->first();
        // dd($data);
        return view('admin.MengapaKami.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = MengapaKami::find($id);
        if (isset($request->judul)) {
            $input->judul = $request->judul;
        }
        if (isset($request->icon)) {
            $input->icon = $request->icon;
        }
        if (isset($request->teks1)) {
            $input->deskripsi = $request->teks1;
        }
        if (isset($request->is_tampil)) {
            $input->is_tampil = $request->is_tampil;
        }
        $input->update();
        Alert::success('Success', 'Sukses edit');
        return redirect()->route('adminMengapaKami.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = MengapaKami::find($id);
        $input->delete();
        Alert::success('Success', 'Sukses Delete');

    }

    
    public function icon()
    {
        return view('admin.MengapaKami.add');
    }
}
