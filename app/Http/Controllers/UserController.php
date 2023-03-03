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
            'level' => 'member'
        ]);
        Member::create([
            'idusers' => $id_user->id
        ]);
        return redirect('/signin');
    }
}
