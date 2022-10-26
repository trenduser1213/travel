<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class adminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'About' => About::first(),
        ];
        return view('admin.About.edit', $data);
    }


    public function update($id, Request $request)
    {
        $input = About::find($id);
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
        Alert::success('Success', 'Sukses edit About ');
        return redirect()->route('adminAbout.index');
    }


}
