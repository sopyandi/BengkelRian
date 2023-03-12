<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Mekanik;
use Illuminate\Http\Request;
use App\Models\JenisKerusakan;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function member()
    {
        return view('dashboard.dashboard');
    }
    public function admin()
    {
        return view('dashboard.dashboard');
    }
    public function create()
    {
        return view('dashboard.create');
    }
    public function data_member()
    {
        return view('dashboard.member',[
            "database"=>Member::all()
        ]);
    }
    public function data_mekanik()
    {
        return view('dashboard.mekanik',[
            "database"=>Mekanik::all()
        ]);
    }
        public function data_kerusakan()
    {
        return view('dashboard.kerusakan',[
            'database' => JenisKerusakan::all()
        ]);
    }
    public function intro()
    {
        return view('dashboard.intro');
    }
}
