<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role=Role::user();
        if (\Auth::user()->hasAnyRole('admin')) {
            return redirect()->route('adminDashboard.index');  
        }else{
            return redirect()->route('mitraDashboard.index');
        }

        dd($role);
    }
}
