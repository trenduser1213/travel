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
        if(isset($request->judul)){
            $input->judul = $request->judul;
        }        
        if(isset($request->written_by)){
            $input->subjudul =$request->written_by;
        }        
        if(isset($request->link_video)){
            $input->link_video=$request->link_video;
        }
        if(isset($request->motto)){
            $input->motto=$request->motto;
        }
        if(isset($request->submotto)){
            $input->submotto=$request->submotto;
        }
        if(isset($request->teks_sejajar_video)){
            $input->teks_sejajar_video=$request->teks_sejajar_video;
        }
        if(isset($request->teks_di_bawah_video)){
            $input->teks_di_bawah_video=$request->teks_di_bawah_video;
        }
        if(isset($request->teks_di_beranda)){
            $input->teks_di_beranda=$request->teks_di_beranda;
        }
        $input->update();
        Alert::success('Success', 'Sukses edit About ');
        return redirect()->route('adminAbout.index');
    }


}
