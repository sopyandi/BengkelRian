@extends('dashboard.layouts.main')
@section('container')
<form action="/proses_update" class="mt-7 mx-10 " method="post">
@csrf
<input name="id" type="hidden" value="{{ $database->id }}">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nama Member</label>
          <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->nama }}">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nomor HP</label>
          <input name="nohp" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->nohp }}">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Email Address</label>
          <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->email }}">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nomor Induk</label>
          <input name="nik" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->nik }}">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Foto Profile</label>
          <input name="foto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->foto }}">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Foto KTP</label>
          <input name="ktp" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->ktp }}">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Alamat</label>
          <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $database->alamat }}">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Akun Users</label>
          <input  type="text" class="form-control" id="exampleFormControlInput1" value="{{ $database->user->username }}" placeholder="" readonly>
          <input type="hidden" name="idusers" value="{{ $database->user_id }}">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-12 ">
        <button class="btn btn-primary btn-lg w-100">Update Data Member</button>
    </div>
</div>
</form>
<form class="mx-10" action="hapus_member" method="post" >
@csrf
<div class="row">
    <div class="col-md-12">
        <input type="hidden" name="id" value="{{ $database->id }}">
        <button class="btn btn-danger btn-lg w-100 " onclick="return confirm('Yakin Menghapus ?')">Delete Data</button>
    </div>
</div>
</form>
@endsection
