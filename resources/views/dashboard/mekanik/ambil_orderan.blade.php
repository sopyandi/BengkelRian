@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-8 ">
    <div class="card card-frame ">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5>Data Pelanggan</h5>
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p>Nama Pengaju </p>
                            </td>
                            <td>
                                <p>&nbsp;&nbsp; :{{ $database->Member->nama }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Nik </p>
                            </td>
                            <td>
                                <p>&nbsp;&nbsp; :{{ $database->Member->nik }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Alamat </p>
                            </td>
                            <td>
                                <p>&nbsp;&nbsp; :{{ $database->Member->alamat}}</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col">
                    <h5>Data Kendaraan</h5>
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p>Pelat nomor Kendaraan </p>
                            </td>
                            <td>
                                <p>:{{ $database->pelatnomor }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Jenis Kerusakan</p>
                            </td>
                            <td>
                                <p>:{{ $database_kerusakan->JenisKerusakan->jenisKerusakan }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tahun Kendaraan</p>
                            </td>
                            <td>
                                <p>:{{ $database_kerusakan->Kerusakan->tahunkendaraan }}</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <p style="color:red;">Dengan menekan tombol di bawah anda sebagai mekanik akan bertanggung jawab  dengan sepenuh hati <br> Tolong pertanggung jawabkan
                        setiap kerjaan anda karena tugas ini mempertaruh kan website kami !!!!!</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <form class="form" action="tambah_perbaikan" method="post">
                        @csrf
                        <input type="hidden" value="{{Auth::user()->mekanik_id}}" name="mekanik_id">
                        <input type="hidden" value="{{ $database->id }}" name="kerusakan_id">
                <button  class="btn btn-success btn-lg">Setujui Kontrak</button>
                    </form>
                </div>
                <div class="col"></div>

            </div>
        </div>
      </div>
</div>
@endsection

 {{-- <html>
<head>
<title>Faktur Pembayaran</title>
<style>
#tabel
{
font-size:15px;
border-collapse:collapse;
}
#tabel  td
{
padding-left:5px;
border: 1px solid black;
}
</style>
</head>
<body style='font-family:tahoma; font-size:8pt;' >
<center>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
<span style='font-size:12pt'><b>Nama Toko</b></span></br>
Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko Alamat Toko </br>
Telp : 0594094545
</td>
<td style='vertical-align:top' width='30%' align='left'>
<b><span style='font-size:12pt'>FAKTUR PENJUALAN</span></b></br>
No Trans. : 4</br>
Tanggal :06 Januari 2016</br>
</td>
</table>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
Nama Supplier : Pelanggan</br>
Alamat : -
</td>
<td style='vertical-align:top' width='30%' align='left'>
No Telp : -
</td>
</table>
<table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>

<tr align='center'>
<td width='10%'>Kode Barang</td>
<td width='20%'>Nama Barang</td>
<td width='13%'>Harga</td>
<td width='4%'>Qty</td>
<td width='7%'>Discount</td>
<td width='13%'>Total Harga</td>
<tr><td>T501F</td>
<td>Asus Zenfone 5</td>
<td>Rp2.400.000,00</td>
<td>1</td>
<td>Rp0,00</td>
<td style='text-align:right'>Rp2.400.000,00</td>
<tr><td>T12</td><td>Tinta</td>
<td>Rp60.000,00</td>
<td>1</td>
<td>Rp0,00</td>
<td style='text-align:right'>Rp60.000,00</td></tr>

<tr>
<td colspan = '5'><div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div></td>
<td style='text-align:right'>Rp2.460.000,00</td>
</tr>
<tr>
<td colspan = '6'><div style='text-align:right'>Terbilang : Dua Juta Empat Ratus Enam Puluh  Ribu  Rupiah</div></td>
</tr>
<tr>
<td colspan = '5'><div style='text-align:right'>Cash : </div></td>
<td style='text-align:right'>Rp2.460.000,00</td>
</tr>
<tr>
<td colspan = '5'><div style='text-align:right'>Kembalian : </div></td><td style='text-align:right'>Rp0,00</td>
</tr>
<tr>
<td colspan = '5'><div style='text-align:right'>DP : </div></td>
<td style='text-align:right'>Rp0,00</td>
</tr>
<tr>
<td colspan = '5'><div style='text-align:right'>Sisa : </div></td>
<td style='text-align:right'>Rp0,00</td></tr>
</table>

<table style='width:650; font-size:7pt;' cellspacing='2'>
<tr>
<td align='center'>Diterima Oleh,</br></br><u>(............)</u></td>
<td style='border:1px solid black; padding:5px; text-align:left; width:30%'></td>
<td align='center'>TTD,</br></br><u>(...........)</u></td>
</tr>
</table>
</center>
</body>
</html> --}}
