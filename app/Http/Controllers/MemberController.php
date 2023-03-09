<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function data_member()
    {
    return view('dashboard.member',[
    "database"=>Member::all()
    ]);
    }
    public function update_member(Request $req){
    $database = Member::find($req->id);
    return view('dashboard/edit/update_member',[
    "database" => $database
    ]);
    }
    public function delete_member(Request $req){
    $id = $req->id;
    $hapus = Member::where('id',$id)->delete();
    return redirect('/member');
    }
    public function proses_update(Request $req){
    // return $req;
     Member::where('id',$req->id)->update([
    'nama'=>$req->nama,
    'nohp'=>$req->nohp,
    'email'=>$req->email,
    'nik'=>$req->nik,
    'foto'=>$req->foto,
    'ktp'=>$req->ktp,
    'alamat'=>$req->alamat,
    'user_id'=>$req->idusers
    ]);
    User::where('id',$req->idusers)->update([
    'member_id' => $req->id
    ]);
    return redirect('/member');
    }
}
