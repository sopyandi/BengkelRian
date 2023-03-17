@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-5 ">
    <div class="card card-frame ">
        <div class="card-body" style="">
           <b> <h4 style="font-style:italic;" >Kendaraan Yang Harus Di Perbaiki</h4></b>
            <hr><hr>
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
                                <p>&nbsp;&nbsp; :{{ $database->Kerusakan->member->nama}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Nik </p>
                            </td>
                            <td>
                                <p>&nbsp;&nbsp; :{{$database->Kerusakan->member->nik}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Alamat </p>
                            </td>
                            <td>
                                <p>&nbsp;&nbsp; :{{$database->Kerusakan->member->alamat}}</p>
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
                                <p>:{{ $database->Kerusakan->pelatnomor}}</p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                                <p>Tahun Kendaraan</p>
                            </td>
                            <td>
                                <p>:{{ $database->Kerusakan->tahunkendaraan}}</p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <img src="rusak.jpg" alt="" style="width:100%;height:250px;border-radius:10px;">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="basic-url">Detail Kerusakan</label>
                      <textarea name="" id="" cols="" rows="4" class="form-control" id="exampleFormControlInput1"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="form-control-label" for="basic-url">Biaya Perbaikan</label>
                      <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                  </div>

            </div>
            <br>
            {{-- <div class="row">
                <div class="col">
                    <p style="color:red;">Dengan menekan tombol di bawah anda sebagai mekanik akan bertanggung jawab  dengan sepenuh hati <br> Tolong pertanggung jawabkan
                        setiap kerjaan anda karena tugas ini mempertaruh kan website kami !!!!!</p>
                </div>
            </div> --}}
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
