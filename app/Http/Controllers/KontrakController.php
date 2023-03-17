<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KontrakController extends Controller
{
 public function kontrak(){
    $database = Kontrak::where('idmekanik',Auth::user()->Mekanik->id)->first();
    return view('dashboard/mekanik/kontrak',[
        'database'=>$database
    ]);
 }
}
