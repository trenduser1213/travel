<?php

namespace App\Http\Controllers;
use App\Models\MitraMarketing;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Nette\Utils\Random;
use Illuminate\Support\Facades\Hash;

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
            'provinsi' => Province::select("*")->orderBy("name")->get(),
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
            'nama' => 'required',
            'hp'=> 'required',
            'wa' =>'required',
            'alamat' =>'required',
            'kabupaten' =>'required',
            'provinsi' =>'required',
            'jabatan' =>'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
            'email' => 'required',
        ]);
        
        $image = $request->file('foto');
        $destinationPath = 'assets/images/produk';
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);

        $username = Str::random('5');

        $input = new MitraMarketing();
        $input->nama = $request->nama;
        $input->hp= $request->hp ;
        $input->wa = $request->wa ;
        $input->alamat = $request->alamat ;
        $input->kota = $request->kabupaten ;
        $input->provinsi = $request->provinsi ;
        $input->jabatan = $request->jabatan ;
        $input->status = 1 ;
        $input->username = $username ;        
        $input->foto = $namePath;
        $input->save();

        $inputUser = new user();
        $inputUser->name = $request->nama;
        $inputUser->email = $request->email;
        $inputUser->username = $username;
        $inputUser->password = Hash::make('password');
        $inputUser->save();


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
                'provinsi' => Province::select("*")->orderBy("name")->get(),
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
        $inputUser = User::find($id);
        if(isset($request->nama)){
            $input->nama = $request->nama;
            $inputUser->name = $request->nama;
        }        
        if(isset($request->hp)){
            $input->hp =$request->hp;
        }        
        if(isset($request->wa)){
            $input->wa=$request->wa;
        }
        if(isset($request->alamat)){
            $input->alamat=$request->alamat;
        }
        if(isset($request->kabupaten)){
            $input->kota=$request->kabupaten;
        }
        if(isset($request->provinsi)){
            $input->provinsi=$request->provinsi;
        }
        if(isset($request->jabatan)){
            $input->jabatan=$request->jabatan;
        }
        if(isset($request->status)){
            $input->status=$request->status;
        }
        if(isset($request->is_tampil)){
            $input->is_tampil=$request->is_tampil;
        }
        if ($request->file('foto')) {
            $image = $request->file('foto');
            $destinationPath = 'assets/images/produk';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $input->foto = $namePath ;
        }
        $input->update();
        $inputUser->update();
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
