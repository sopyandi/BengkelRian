<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\Mekanik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MekanikController extends Controller
{
 public function daftar_mekanik(){
    return view('dashboard/create/daftar_mekanik',[
    'database' => Member::all()
    ]);
 }
 public function create_mekanik(Request $req){
    $id_mekanik = Mekanik::create([
    'nama'=>$req->nama,
    'alamat'=>$req->alamat,
    'member_id'=>$req->member_id,
    'statusAktivasi'=>'0'
    ]);
    User::where('id',Auth::user()->id)->update([
    'mekanik_id' => $id_mekanik->id
    ]);
    if(Auth::user()->level == 'admin'){
    return redirect('/mekanik');
    }
    return redirect('/daftar_mekanik');

 }
 public function update_mekanik(Request $req){
    Mekanik::where('id',$req->id)->update([
    'statusAktivasi'=> $req->status
    ]);
    return redirect('/mekanik');
 }
}
