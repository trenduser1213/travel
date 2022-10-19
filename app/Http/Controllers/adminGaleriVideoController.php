<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriModel;
// use RealRashid\SweetAlert\Facades\Alert;


class adminGaleriVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->GaleriModel=new GaleriModel();
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.addVideo');
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
            'is_tampil_di_beranda'=> 'required',
            'is_tampil_di_galeri' =>'required',
            'link' => 'required' 
        ]);
        // $image = $request->file('link');
        // $destinationPath = 'assets/images/gallery';
        // $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        // $namePath=$image->move($destinationPath, $profileImage);

        $kategori_galeri = "video";
        $input = new GaleriModel();
        $input->judul = $request->judul;
        $input->kategori_galeri = $kategori_galeri ;
        $input->is_tampil_di_beranda= $request->is_tampil_di_beranda ;
        $input->is_tampil_di_galeri = $request->is_tampil_di_galeri ;
        $input->link = $request->link;
        $input->save();
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->route('adminGaleri.index')
        
        ->with('success','Video berhasil ditambahkan ! ');
        // ->alert()->question('QuestionAlert','Lorem ipsum dolor sit amet.');
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
            'video' => $this->GaleriModel->thisVideo($id)
        ];
        return view('admin.galeri.editVideo', $data);
    
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
        $input = GaleriModel::find($id);
        if(isset($request->judul)){
            $input->judul = $request->judul;
        }        
        if(isset($request->is_tampil_di_beranda)){
            $input->is_tampil_di_beranda =$request->is_tampil_di_beranda;
        }        
        if(isset($request->is_tampil_di_galeri)){
            $input->is_tampil_di_galeri=$request->is_tampil_di_galeri;
        }
        if (isset($request->link)) {
            $input->link = $request->link;
        }
        $input->update();
        return redirect()->route('adminGaleri.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = GaleriModel::find($id);
        $input->delete();
        return redirect()->route('adminGaleri.index');
    }
}
