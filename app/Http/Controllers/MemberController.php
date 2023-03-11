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
    "database"=>Member::all(),
    "username"=>User::where('')
    ]);
    }
    public function tambah_data_member(Request $req){
    return view('dashboard/create/tambah_data_member');
    }
    public function update_member(Request $req){
        // return $req;
    $database = Member::find($req->id);
    return view('dashboard/edit/update_member',[
    "database" => $database
    ]);
    }
    public function delete_member(Request $req){
        // return $req;
    $id = $req->id;
    $id_user = $req->id_user;
    Member::where('id',$id)->delete();
    User::where('id',$id_user)->delete();
    return redirect('/member');
    }
    //proses tambah data member
    public function proses_tambah_data(Request $req){
        // @dd($req);
        $id = $req->id;
        if($req->file('foto_member')){
            $foto_member = $req->file('foto_member')->store('foto-member');
        }else{
            $foto_member='';
        }
        if($req->file('foto_ktp')){
            $foto_ktp = $req->file('foto_ktp')->store('foto-ktp');
        }else{
            $foto_ktp='';
        }
     Member::where('user_id',$id)->update([
    'nama'=>$req->nama,
    'nohp'=>$req->nohp,
    'email'=>$req->email,
    'nik'=>$req->nik,
    'foto'=>$foto_member,
    'ktp'=>$foto_ktp,
    'alamat'=>$req->alamat,
    // 'user_id'=>$req->idusers
    ]);

    $id_member = Member::where('user_id',$id)->first();
    User::where('id',$req->idusers)->update([
    'member_id' => $id_member->id
    ]);
    return redirect('/dashboard');
    }

    //proses updata member
    public function proses_update(Request $req){
        $id = $req->id;
     Member::where('id',$id)->update([
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
