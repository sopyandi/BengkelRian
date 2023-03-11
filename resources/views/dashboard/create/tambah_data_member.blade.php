@extends('dashboard.layouts.main')
@section('container')
<form action="proses_tambah_data" class="mt-7 mx-10 " method="post" enctype="multipart/form-data">
@csrf
<input name="id" type="hidden" value="{{ Auth::user()->id }}">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nama Member</label>
          <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nomor HP</label>
          <input name="nohp" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Email Address</label>
          <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nomor Induk</label>
          <input name="nik" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Foto Profile</label>
          <input name="foto_member" type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Foto KTP</label>
          <input name="foto_ktp" type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Alamat</label>
          <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Akun Users</label>
          <input  type="text" class="form-control" id="exampleFormControlInput1" value="" placeholder="{{Auth::user()->username}}" readonly>
          <input type="hidden" name="idusers" value="{{Auth::user()->id}}">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-12 ">
        <button class="btn btn-primary btn-lg w-100">Lengkapi Data Member</button>
    </div>
</div>
</form>
@endsection
