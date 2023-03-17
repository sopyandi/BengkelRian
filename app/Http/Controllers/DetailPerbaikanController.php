<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Mekanik;
use App\Models\Perbaikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DetailPerbaikanController extends Controller
{
 public function transaksi_member(){
    $database = Perbaikan::where('idkerusakan' , Auth::user()->member->Kerusakan->id)->first();
    return view('dashboard/proses/transaksi',[
        'database' => $database
    ]);
 }
 public function bayar_perbaikan (Request $req){
    // return $req;
    $perbaikan = Perbaikan::find($req->id);
    if($perbaikan->kerusakan->member->saldo >= 500000){
        $saldo_pelanggan = $perbaikan->Kerusakan->member->saldo;
        $biaya = 500000;
        $saldo_mekanik = $perbaikan->mekanik->member->saldo;
        // proses update saldo
        $saldo_baru_pelanggan = $saldo_pelanggan - $biaya;
        $bayaran_mekanik = $saldo_mekanik + $biaya;

        Member::find($perbaikan->kerusakan->member->id)->update([
            'saldo' => $saldo_baru_pelanggan
                ]);
        Member::find($perbaikan->mekanik->member->id)->update([
        'saldo' => $bayaran_mekanik
        ]);
        // return $bayaran_mekanik;
        Perbaikan::find($req->id)->delete();
        return redirect('transaksi_member');
    }else{
        return redirect('transaksi_member');
    }

 }
}
