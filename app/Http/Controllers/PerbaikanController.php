<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerbaikanController extends Controller
{
 public function perbaikan($id){
    $database = Kerusakan::find($id);
    return view('dashboard/mekanik/ambil_orderan',[
        'database' => $database
    ]);
 }
}
