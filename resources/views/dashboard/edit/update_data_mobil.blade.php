@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-5">
    <form action="update_data_mobil" class=" " method="post" enctype="multipart/form-data">
        @csrf
    <input name="kerusakan_id" type="hidden" value="{{ $database->id }}">
    <input name="member_id" type="hidden" value="{{ Auth::user()->member->id }}">
    <div class="row">
        <div class="col-md-6">
            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background" style="background-image: url('storage/{{ $database->fotokendaraan}}')"></div>
                <img src="{{ $database->fotokendaraan }}" alt="">
                <div class="card-body pt-12">
                  <h4 class="text-white">Foto Kemdaraan Kamu</h4>
                  <p>Kami Tidak Menerima Perbaikan Tanpa Foto Mobil Yang Akan Di Perbaiki.</p>
                </div>
              </div>
            </a>
            <input name="foto_kendaraan" type="file" class="form-control mt-4" placeholder="Ganti Gambar Mobil">
          </div>
        <div class="col-md-6 mt-5 w-40" >
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Pelat Nomor</label>
              <input name="pelat_nomor" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->pelatnomor}}" required>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Jenis Kendaraan</label>
              {{-- <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
              <select name="jenis_kendaraan" id="" class="form-control">
                <option value="mobil">mobil</option>
                <option value="motor">motor</option>
              </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Type Kendaraan</label>
              {{-- <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
              <select name="type_kendaraan" id="" class="form-control">
                <option value="bensin">Bensin</option>
                <option value="solar">solar</option>
              </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Tahun Kendaraan</label>
              <input name="tahun_kendaraan" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">
                <button class="btn btn-primary w-100" >Updata Data Mobil</button>
            </div>
      </div>
    </div>
        <div class="col">
            </div>
        </div>
    </form>
    </div>
@endsection
