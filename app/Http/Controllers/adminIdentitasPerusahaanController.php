<?php

namespace App\Http\Controllers;
use App\Models\IdentitasPerusahaan;
use Illuminate\Http\Request;

class adminIdentitasPerusahaanController extends Controller
{
    public function index(){
        $data = [
         'data' => IdentitasPerusahaan::first()
        ];
        // dd($data);
        return view('admin.IdentitasPerusahaan.edit', $data);
    }

    public function store(Request $request){

        $identitas = IdentitasPerusahaan::first() ;
        $identitas->nama = $request->nama;
        $identitas->nama_gedung_kantor = $request->nama_gedung_kantor;
        $identitas->alamat = $request->alamat;
        $identitas->gmaps = $request->gmaps;
        $identitas->no_hp_1 = $request->no_hp_1 ;
        $identitas->no_hp_2 = $request->no_hp_2;
        $identitas->no_telepon_1 = $request->no_telepon_1 ;
        $identitas->no_telepon_2 = $request->no_telepon_2 ;
        $identitas->email = $request->email ;
        $identitas->nama_pada_rekening = $request->nama_pada_rekening ;
        $identitas->no_rekening_1 = $request->norek1 ;
        $identitas->no_rekening_2 = $request->norek2 ;
        $identitas->no_rekening_3 = $request->norek3 ;
        $identitas->no_rekening_4 = $request->norek4 ;
        $identitas->facebook = $request->fb ;
        $identitas->instagram = $request->ig ;
        $identitas->youtube = $request->yt ;

        $identitas->save();

        return redirect()->back()->with('success', 'Perubahan telah tersimpan!');
    }
}
