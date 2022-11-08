<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Peminat;
use RealRashid\SweetAlert\Facades\Alert;

class adminPeminatController extends Controller
{
    public function index()
    {   
        // $jamaah = DataJamaah::all() ;
        $Peminat =DB::table('peminats')
        ->join('mitra_marketings', 'peminats.mitra_marketing', '=', 'mitra_marketings.id')
        ->select('peminats.*', 'mitra_marketings.nama as nama_mitra')
        ->get();

        $data = [
            'Peminat' => $Peminat,
        ];
        // dd($data);
        return view('admin.Peminat.index', $data);
    }
    public function update( Request $request, $id)
    {
        $input = Peminat::find($id);
        if(isset($request->status)){
            $input->status = $request->status;
        } 
        $input->update();
        Alert::success('Success', 'Sukses edit');
        return redirect()->route('adminPeminat.index');
    }
    public function destroy($id)
    {
        $input = Peminat::find($id);
        $input->delete();
        // Alert::success('Success', 'Sukses Menghapus Data ');
        return redirect()->route('adminPeminat.index');
    }
}