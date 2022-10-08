<?php

namespace App\Http\Controllers;

use App\Models\syaratKetentuans;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class SyaratKetentuansController extends Controller
{
    // public function __construct()
    // {
    //     $this->syaratKetentuans = new syaratKetentuans();
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syarat = DB::table('syarat_dan_ketentuan')->first();
        return view('admin.SyaratKetentuan.index')->with('syarat',$syarat);
        // dd($syarat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.SyaratKetentuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descSummernote' => 'required',
        ]);
        
        $input = $request->all();
  
        if ($image = $request->file('gambar')) {
            $destinationPath = 'syarat';
            $profileImage = date('YmdHis') . ".".uniqid()."." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
    
        syaratKetentuans::create([
            'judul' => $input['judul'],
            'gambar'=> $input['gambar'],
            'desc'  => $input['descSummernote']
        ]);
        return redirect()->route('adminKetentuan.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\syaratKetentuans  $syaratKetentuans
     * @return \Illuminate\Http\Response
     */
    public function show(syaratKetentuans $syaratKetentuans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\syaratKetentuans  $syaratKetentuans
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $syaratKetentuans = syaratKetentuans::find($id);
        return view('admin.SyaratKetentuan.edit')->with('syaratKetentuans',$syaratKetentuans);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\syaratKetentuans  $syaratKetentuans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'         =>'required|sometimes',
            'subjudul'      =>'required|sometimes',
            'judul1'        =>'required|sometimes',
            'judul2'        =>'required|sometimes',
            'judul3'        =>'required|sometimes',
            'isi1'      =>'required|sometimes',
            'isi2'      =>'required|sometimes',
            'isi3'      =>'required|sometimes',    
            'gambar1'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gambar2'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gambar3'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        if ($image = $request->file('gambar1')) {
            $destinationPath = 'assets/images/syarat-dan-ketentuan';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $request->gambar1 = $namePath;
        }else{
            unset($request['gambar1']);
        }       
        if ($image2 = $request->file('gambar2')) {
            $destinationPath2 = 'assets/images/syarat-dan-ketentuan/';
            $profileImage2 = date('YmdHis') . ".".uniqid()."." . $image2->getClientOriginalExtension();
            $namePath2=$image2->move($destinationPath2, $profileImage2);
            $request->gambar2 = $namePath2;
        }else{
            unset($request['gambar2']);
        }
        if ($image3 = $request->file('gambar3')) {
            $destinationPath3 = 'assets/images/syarat-dan-ketentuan/';
            $profileImage3 = date('YmdHis') .".".uniqid()."." . $image3->getClientOriginalExtension();
            $namePath3=$image3->move($destinationPath3, $profileImage3);
            $request->gambar3 = $namePath3;
        }else{
            unset($request['gambar3']);
        }
        // dd($request->gambar1,$request['gambar2'],$request['gambar3']);
        // dd($request->gambar1);
        $syarat = syaratKetentuans::find($id);
        // $input= $request->all();
        $syarat->judul  = $request->judul;
        $syarat->subjudul  = $request->subjudul;
        $syarat->judul1  = $request->judul1;
        $syarat->gambar1  = $request->gambar1;
        $syarat->isi1  = $request->isi1;
        $syarat->judul2  = $request->judul2;    
        $syarat->gambar2  = $request->gambar2;
        $syarat->isi2  = $request->isi2;
        $syarat->judul3  = $request->judul3;    
        $syarat->gambar3  = $request->gambar3;
        $syarat->isi3  = $request->isi3;
        // dd($input);
        $syarat->update();
        // dd($syarat);
        return redirect()->route('adminKetentuan.index')->with('success','Product created successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\syaratKetentuans  $syaratKetentuans
     * @return \Illuminate\Http\Response
     */
    public function destroy(syaratKetentuans $syaratKetentuans)
    {
        //
    }
}
