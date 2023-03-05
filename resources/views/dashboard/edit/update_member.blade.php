@extends('dashboard.layouts.main')
@section('container')
<form action="" class="mt-7 mx-10  ">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nama Member</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
          {{-- {{ $database->email }} --}}
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nomor HP</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Email Address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nomor Induk</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Foto Profile</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Foto KTP</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Alamat</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Akun Users</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-12 ">
        <button class="btn btn-primary btn-lg w-100">Update Data Member</button>
    </div>
</div>
</form>
@endsection
