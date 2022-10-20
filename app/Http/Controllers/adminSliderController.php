<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

use RealRashid\SweetAlert\Facades\Alert;

class adminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'Slider' => Slider::all()     
        ];
        return view('admin.Slider.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.Slider.add');
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
            'teks1' => 'required',
            'teks2' => 'required',
            'is_tampil'=> 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);
        $image = $request->file('gambar');
        $destinationPath = 'assets/images/slider';
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);

        $input = new Slider;
        $input->teks1 = $request->teks1;
        $input->teks2 = $request->teks2;
        $input->is_tampil = $request->is_tampil ;
        $input->gambar = $namePath ;
        $input->save();
        Alert::success('Success', 'Sukses menambahkan slider');
        return redirect()->route('adminSlider.index');
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
            'Slider' => Slider::find($id)
        ];
        return view('admin.Slider.edit', $data);
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
        $input = Slider::find($id);
        if(isset($request->teks1)){
            $input->teks1 = $request->teks1;
        }        
        if(isset($request->teks2)){
            $input->teks2 = $request->teks2;
        }        
        if(isset($request->is_tampil)){
            $input->is_tampil =$request->is_tampil;
        }        
        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'assets/images/slider';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $input->gambar = $namePath ;
        }
        $input->update();
        Alert::success('Success', 'Sukses edit');
        return redirect()->route('adminSlider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = Slider::find($id);
        $input->delete();
        Alert::success('Success', 'Sukses hapus ');
        return redirect()->route('adminSlider.index');
    }
}
