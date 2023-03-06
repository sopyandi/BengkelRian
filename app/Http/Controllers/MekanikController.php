<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MekanikController extends Controller
{
 public function daftar_mekanik(){
    return view('dashboard/create/daftar_mekanik');
 }
 public function create_mekanik(Request $req){
    Mekanik::create([
    'nama'=>$req->nama,
    'alamat'=>$req->alamat,
    'idmember'=>$req->idmember,
    'statusAktivasi'=>'0'
    ]);
    return redirect('/mekanik');
 }
 public function update_mekanik(Request $req){
    Mekanik::where('id',$req->id)->update([
    'statusAktivasi'=> $req->status
    ]);
    return redirect('/mekanik');
 }
}
