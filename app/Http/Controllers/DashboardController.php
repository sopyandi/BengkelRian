<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
