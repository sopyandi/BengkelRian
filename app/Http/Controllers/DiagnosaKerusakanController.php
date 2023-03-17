<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Kontrak;
use App\Models\Kerusakan;
use Illuminate\Http\Request;
use App\Models\JenisKerusakan;
use App\Models\DiagnosaKerusakan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DiagnosaKerusakanController extends Controller
{
public function ajukan_perbaikan(){
    $kerusakan = Kerusakan::where('member_id',Auth::user()->member->id)->first();
    if(DiagnosaKerusakan::where('kerusakan_id',Auth::user()->member->kerusakan->id)->first() == null){
    return view('dashboard/create/ajukan_perbaikan',[
    'database_jenis_kerusakan' => JenisKerusakan::all(),
    'database_kerusakan' => $kerusakan
    ]);
}
    if(DiagnosaKerusakan::where('kerusakan_id',Auth::user()->member->kerusakan->id)->first() != null){
       $database = DiagnosaKerusakan::where('kerusakan_id',Auth::user()->member->kerusakan->id)->first();
        return view('dashboard/proses/menunggu_penanganan',[
            'database'=>$database
        ]);
    }
}
public function proses_tambah(Request $req){
    // return $req;
        DiagnosaKerusakan::create([
        'idjeniskerusakan'=>$req->id_jenis_kerusakan,
        'kerusakan_id'=>$req->pelat_nomor,
        'keterangan'=>$req->keterangan
    ]);
    return redirect('/ajukan_perbaikan');
}
public function orderan(){
    $database = DiagnosaKerusakan::all();
    return view('dashboard.mekanik.orderan',[
        'database'=> $database
    ]);
}
}
