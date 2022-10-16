<?php

namespace App\Http\Controllers;
use App\Models\GaleriModel;
use Illuminate\Http\Request;

class adminGaleriController extends Controller
{
    public function __construct()
    {
        $this->GaleriModel = new GaleriModel();
    }
    public function index(){
        $data = [
            'foto' => $this->GaleriModel->allDataFoto(),
            'video' => $this->GaleriModel->allDataVideo()
        ];
        return view('admin.galeri.index', $data);
    }
}
