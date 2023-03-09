<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    public function create (Request $req){
        $datalogin = $req->validate([
            'username' => 'required',
            'password' => 'required',
            // 'cp' => $req->password,
            // 'level'=> 'member'
        ]);
       $id_user = User::create([
            'username' => $req->username,
            'password' => bcrypt($req->password),
            'level' => 'member',
            'mekanik_id' => '1'
            // 'member_id' =>
        ]);
        Member::create([
            'nama' =>'kosong',
            'nohp' =>'kosong',
            'email' =>'kosong',
            'nik' =>'kosong',
            'foto' =>'foto_profile/guest.png',
            'ktp' =>'foto_ktp/ktp.png',
            'alamat' =>'belum di isi',
            'user_id' => $id_user->id
        ]);
        return redirect('/signin');
    }
}
