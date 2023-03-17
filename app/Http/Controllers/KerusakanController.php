<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KerusakanController extends Controller
{
 public function data_mobil(){
    if(auth()->user()->member->kerusakan != null){
    $id = Auth::user()->member->kerusakan->id;
    return view('dashboard/edit/update_data_mobil',[
        'database'=> Kerusakan::where('id',$id)->first()
    ]);
    }else{
        return view('dashboard/create/tambah_data_mobil');
    }
 }
 public function proses_tambah(Request $req){
    if($req->file('foto_kendaraan')){
        $foto_kendaraan = $req->file('foto_kendaraan')->store('foto-kendaraan');
    }else{
        $foto_kendaraan='';
    }
    Kerusakan::create([
    'pelatnomor'=>$req->pelat_nomor,
    'jnskendaraan'=>$req->jenis_kendaraan,
    'tipekendaraan'=>$req->type_kendaraan,
    'tahunkendaraan'=>$req->tahun_kendaraan,
    'fotokendaraan'=>$foto_kendaraan,
    'member_id'=>$req->id_member
    ]);
    return redirect('data_mobil');
 }
 public function proses_update(Request $req){
    // return $req;
    if($req->file('foto_kendaraan')){
        $foto_kendaraan = $req->file('foto_kendaraan')->store('foto-kendaraan');
    }else{
        $foto_kendaraan='';
    }
    Kerusakan::find($req->kerusakan_id)->update([
    'pelatnomor'=>$req->pelat_nomor,
    'jnskendaraan'=>$req->jenis_kendaraan,
    'tipekendaraan'=>$req->type_kendaraan,
    'tahunkendaraan'=>$req->tahun_kendaraan,
    'fotokendaraan'=>$foto_kendaraan,
    'member_id'=>$req->member_id
    ]);
    return redirect('data_mobil');
 }
}
