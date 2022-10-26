<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function index(){

        $data = [

        ];
        return view('admin.dashboard.index', $data);
    }
}
