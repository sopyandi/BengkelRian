<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;
use App\Models\JenisKerusakan;
use App\Models\DiagnosaKerusakan;
use App\Http\Controllers\Controller;

class DiagnosaKerusakanController extends Controller
{
public function ajukan_perbaikan(){
    return view('dashboard/create/ajukan_perbaikan',[
    'database_jenis_kerusakan' => JenisKerusakan::all(),
    'database_kerusakan' => Kerusakan::all()
]);
}
public function proses_tambah(Request $req){
    // return $req;
    DiagnosaKerusakan::create([
        'idjeniskerusakan'=>$req->id_jenis_kerusakan,
        'kerusakan_id'=>$req->pelat_nomor,
        'keterangan'=>$req->keterangan
    ]);
    return redirect('/dashboard');
}
public function orderan(){
    $database = DiagnosaKerusakan::all();
    return view('dashboard.mekanik.orderan',[
        'database'=> $database
    ]);
}
}
