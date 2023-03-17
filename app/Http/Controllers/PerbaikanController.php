<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use App\Models\Kerusakan;
use App\Models\Perbaikan;
use Illuminate\Http\Request;
use App\Models\ProsesPerbaikan;
use App\Models\DiagnosaKerusakan;
use App\Http\Controllers\Controller;

class PerbaikanController extends Controller
{
 public function perbaikan(Request $req){
    // return $req;
    $database = Kerusakan::find($req->id);
    $database_kerusakan = DiagnosaKerusakan::where('kerusakan_id',$req->kerusakan_id)->first();
    return view('dashboard/mekanik/ambil_orderan',[
        'database' => $database,
        'database_kerusakan'=>$database_kerusakan
    ]);
 }
 public function tambah_perbaikan(Request $req){
    // return $req;
    $perbaikan_id = Perbaikan::create([
        'tanggal'=> '2020-03-03',
        'statusperbaikan'=> 'proses',
        'statuspembayaran'=>'belum bayar',
        'idmekanik'=> $req->mekanik_id,
        'idkerusakan'=> $req->kerusakan_id
    ]);
        Kontrak::create([
        'tanggal'=> '2020-03-03',
        'statusperbaikan'=> 'proses',
        'statuspembayaran'=>'belum bayar',
        'idmekanik'=> $req->mekanik_id,
        'idkerusakan'=> $req->kerusakan_id
    ]);
    DiagnosaKerusakan::where('kerusakan_id',$req->kerusakan_id)->delete();
    return redirect('orderan');
 }
}
