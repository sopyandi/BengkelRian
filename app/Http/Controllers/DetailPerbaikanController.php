<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Kontrak;
use App\Models\Mekanik;
use App\Models\Perbaikan;
use Illuminate\Http\Request;
use App\Models\DetailPerbaikan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DetailPerbaikanController extends Controller
{
 public function transaksi_member(){
    $database_detail_perbaika = DetailPerbaikan::where('member_id',Auth::user()->member->id)->get();
    $database = Perbaikan::where('idkerusakan' , Auth::user()->member->Kerusakan->id)->first();
    return view('dashboard/proses/transaksi',[
        'database' => $database,
        'database_detail_perbaikan' => $database_detail_perbaika
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
        DetailPerbaikan::create([
            'jenisperbaikan'=>'perbaikan',
            'nominal'=>$biaya,
            'keterangan'=>'sudah beres dengan aman',
            'idperbaikan'=>$req->id,
            'member_id'=>Auth::user()->member->id
        ]);
        Perbaikan::find($req->id)->delete();
        Kontrak::where('idkerusakan',$perbaikan->kerusakan->id)->delete();
        return redirect('transaksi_member');
    }else{
        return redirect('transaksi_member');
    }

 }
}
