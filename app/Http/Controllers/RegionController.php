<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AzisHapidin\IndoRegion\RawDataGetter;
use Illuminate\Support\Facades\DB;
use  App\Models\Regency;

class RegionController extends Controller
{
    public function dataKabupaten(Request $id)
    {
        $kabupatens = Regency::where('province_id',$id->id_prov)->orderBy("name")->get();
        // dd($kabupatens);
        foreach($kabupatens as $kabupaten ){
            echo"<option value='$kabupaten->id'>$kabupaten->name</option>";
        };

        
        // dd($id);
    }
}
