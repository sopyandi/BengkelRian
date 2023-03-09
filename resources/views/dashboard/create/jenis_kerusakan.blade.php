@extends('dashboard.layouts.main')
@section('container')
<form action="tambah_jenis_kerusakan" class="mt-7 mx-5" method="post">
@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Jenis Kerusakan</label>
          <input name="jenis_kerusakan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Deskripsi Kerusakan</label>
          <textarea name="deskripsi" id="" cols="69" rows="5" class="form-control">
          </textarea>
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6 ">
        <button class="btn btn-primary btn-lg w-100">Ajukan Pendaftaran</button>
    </div>
</div>
</form>
@endsection
