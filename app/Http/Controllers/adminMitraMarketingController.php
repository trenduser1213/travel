<?php

namespace App\Http\Controllers;
use App\Models\MitraMarketing;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class adminMitraMarketingController extends Controller
{
    public function index()
    {
        $data = [
            'MitraMarketing' => MitraMarketing::all()     
        ];
        return view('admin.MitraMarketing.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'provinsi' => Province::all(),
            'kabupaten' => Regency::all(),
            'desa' => Village::all(),
        ];
        return view('admin.MitraMarketing.add', $data);
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
            'pertanyaan' => 'required',
            'jawaban'=> 'required',
            'is_tampil' =>'required',
        ]);
        $input = new MitraMarketing();
        $input->pertanyaan = $request->pertanyaan;
        $input->jawaban= $request->jawaban ;
        $input->is_tampil = $request->is_tampil ;
        $input->save();
        Alert::success('Success', 'Sukses menambahkan MitraMarketing');
        return redirect()->route('adminMitraMarketing.index');
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
                'provinsi' => Province::all(),
                'kabupaten' => Regency::all(),
                'desa' => Village::all(),
            'MitraMarketing' => MitraMarketing::find($id)
        ];
        return view('admin.MitraMarketing.edit', $data);
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
        $input = MitraMarketing::find($id);
        if(isset($request->pertanyaan)){
            $input->pertanyaan = $request->pertanyaan;
        }        
        if(isset($request->jawaban)){
            $input->jawaban =$request->jawaban;
        }        
        if(isset($request->is_tampil)){
            $input->is_tampil=$request->is_tampil;
        }
        $input->update();
        Alert::success('Success', 'Sukses edit MitraMarketing ');
        return redirect()->route('adminMitraMarketing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = MitraMarketing::find($id);
        $input->delete();
        Alert::success('Success', 'Sukses hapus MitraMarketing');
        return redirect()->route('adminMitraMarketing.index');
    }
}
