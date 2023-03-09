@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-5">
    <form action="/proses_update" class=" " method="post">
    <div class="row">
        <div class="col-md-6">
            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1521620112244-f1d36327c766?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1300&amp;q=80')"></div>
                <div class="card-body pt-12">
                  <h4 class="text-white">Gambar Mobil Kamu</h4>
                  <p>Kami Tidak Menerima Perbaikan Tanpa Foto Mobil Yang Akan Di Perbaiki.</p>
                </div>
              </div>
            </a>
            <input name="" type="file" class="form-control mt-4" placeholder="Ganti Gambar Mobil">
          </div>
        <div class="col-md-6 mt-5 w-40" >
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Pelat Nomor</label>
              <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Jenis Kendaraan</label>
              {{-- <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
              <select name="jenis_kendaraan" id="" class="form-control">
                <option value="">mobil</option>
                <option value="">motor</option>
              </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Type Kendaraan</label>
              {{-- <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
              <select name="type" id="" class="form-control">
                <option value="">Bensin</option>
                <option value="">motor</option>
              </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="basic-url">Tahun Kendaraan</label>
              <input name="nama" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">
                <button class="btn btn-primary w-100" >Button</button>
            </div>
      </div>
    </div>
        <div class="col">
                @csrf


            </div>
        </div>
    </form>
    </div>

@endsection
