<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asosiasi;
use RealRashid\SweetAlert\Facades\Alert;

class adminAsosiasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'asosiasi' => Asosiasi::all(),
        ];

        return view('admin.asosiasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asosiasi.add');
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
            'is_tampil'=> 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);

        $image = $request->file('logo');
        $destinationPath = 'assets/images/use-asosiasi';
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);

        $input = new Asosiasi;
        $input->nama = $request->nama;
        $input->is_tampil = $request->is_tampil ;
        $input->logo = $namePath ;
        $input->save();
        Alert::success('Success', 'Sukses menambahkan asosiasi');
        return redirect()->route('adminAsosiasi.index');
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
        'asosiasi' => Asosiasi::find($id)
    ];
    return view('admin.asosiasi.edit', $data);
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
        $input = Asosiasi::find($id);
        if(isset($request->nama)){
            $input->nama = $request->nama;
        }        
        if(isset($request->is_tampil)){
            $input->is_tampil =$request->is_tampil;
        }        
        if ($request->file('logo')) {
            $image = $request->file('logo');
            $destinationPath = 'assets/images/asu-asosiasi';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $input->logo = $namePath ;
        }
        $input->update();
        Alert::success('Success', 'Sukses edit');
        return redirect()->route('adminAsosiasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = Asosiasi::find($id);
        $input->delete();
        Alert::success('Success', 'Sukses hapus ');
        return redirect()->route('adminAsosiasi.index');
    }
}
