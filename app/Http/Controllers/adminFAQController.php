<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use RealRashid\SweetAlert\Facades\Alert;

class adminFAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'FAQ' => FAQ::all()     
        ];
        return view('admin.FAQ.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.FAQ.add');
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
        $input = new FAQ();
        $input->pertanyaan = $request->pertanyaan;
        $input->jawaban= $request->jawaban ;
        $input->is_tampil = $request->is_tampil ;
        $input->save();
        Alert::success('Success', 'Sukses menambahkan FAQ');
        return redirect()->route('adminFAQ.index');
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
            'FAQ' => FAQ::find($id)
        ];
        return view('admin.FAQ.edit', $data);
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
        $input = FAQ::find($id);
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
        Alert::success('Success', 'Sukses edit FAQ ');
        return redirect()->route('adminFAQ.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = FAQ::find($id);
        $input->delete();
        Alert::success('Success', 'Sukses hapus FAQ');
        return redirect()->route('adminFAQ.index');
    }
}
