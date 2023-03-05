<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function update_member(Request $req){
        $database = Member::find($req->id);
    return view('dashboard/edit/update_member',[
        "database" => $database
    ]);
    }
}
