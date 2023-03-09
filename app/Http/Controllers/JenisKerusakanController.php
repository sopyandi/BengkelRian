<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKerusakan;
use App\Http\Controllers\Controller;

class JenisKerusakanController extends Controller
{
    public function tambah_jenis(){
        return view('dashboard/create/jenis_kerusakan');
    }
    public function proses_tambah(Request $req){
        // return $req;
        JenisKerusakan::create([
            'jenisKerusakan' => $req->jenis_kerusakan,
            'deskripsi'=>$req->deskripsi
        ]);
        return redirect('/kerusakan');
    }
}
