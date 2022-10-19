<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class adminTestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'testimoni' => Testimoni::all()     
        ];
        return view('admin.testimoni.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.testimoni.add');
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
            'nama' => 'required',
            'jabatan' =>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'testimoni' => 'required', 
            'is_tampil'=> 'required',
        ]);

        $image = $request->file('gambar');
        // dd($image);
        $destinationPath = 'assets/images/testimoni';
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);

        $input = new Testimoni();
        $input->nama = $request->nama;
        $input->jabatan = $request->jabatan;
        $input->gambar = $namePath;
        $input->testimoni = $request->testimoni;
        $input->is_tampil = $request->is_tampil;
        $input->save();
        return redirect()->route('adminTestimoni.index')->with('success','Sukses Menambahkan Testimoni');
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
        {   $data = [
            'testimoni' => Testimoni::find($id)
        ];
        return view('admin.testimoni.edit', $data);
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
        $input = Testimoni::find($id);
        if (isset($request->nama)) {
            $input->nama = $request->nama;
        }
        if (isset($request->jabatan)) {
            $input->jabatan = $request->jabatan;
        }
        if (isset($request->testimoni)) {
            $input->testimoni = $request->testimoni;
        }
        if (isset($request->is_tampil)) {
            $input->is_tampil = $request->is_tampil;
        }
        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'assets/images/testimoni';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $input->gambar = $namePath;
        }
        $input->update();
        return redirect()->route('adminTestimoni.index')->with('success','Sukses update Testimoni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = Testimoni::find($id);
        $input->delete();
        return redirect()->route('adminTestimoni.index');
    }
}
