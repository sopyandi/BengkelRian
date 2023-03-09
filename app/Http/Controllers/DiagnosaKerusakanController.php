<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKerusakan;
use App\Models\DiagnosaKerusakan;
use App\Http\Controllers\Controller;

class DiagnosaKerusakanController extends Controller
{
public function ajukan_perbaikan(){
    return view('dashboard/create/ajukan_perbaikan',[
    'database_jenis_kerusakan' => JenisKerusakan::all()
]);
}
public function proses_tambah(Request $req){
    // return $req;
    DiagnosaKerusakan::create([
        'idjeniskerusakan'=>$req->id_jenis_kerusakan,
        'idkerusakan'=>$req->pelat_nomor,
        'keterangan'=>$req->keterangan
    ]);
    return redirect('/dashboard');
}
}
