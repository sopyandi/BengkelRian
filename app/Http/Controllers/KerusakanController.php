<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KerusakanController extends Controller
{
 public function data_mobil(){
    $id_member = Auth::user()->member->id;
    return view('dashboard/edit/update_data_mobil',[
        'database'=> Kerusakan::where('id',$id_member)->first()
    ]);
 }
 public function proses_update(Request $req){
    // return $req;
    Kerusakan::create([
    'pelatnomor'=>$req->pelat_nomor,
    'jnskendaraan'=>$req->jenis_kendaraan,
    'tipekendaraan'=>$req->type_kendaraan,
    'tahunkendaraan'=>$req->tahun_kendaraan,
    'fotokendaraan'=>$req->foto_kendaraan,
    'idmember'=>$req->id_member
    ]);
    return redirect('data_mobil');
 }
}
