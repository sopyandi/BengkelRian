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
          <input name="nohp" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
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
{{--


<div class="card-body mx-10">
    <p class="text-uppercase text-sm">User Information</p>
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Username</label>
    <input class="form-control" type="text" value="lucky.jesse">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Email address</label>
    <input class="form-control" type="email" value="jesse@example.com">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">First name</label>
    <input class="form-control" type="text" value="Jesse">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Last name</label>
    <input class="form-control" type="text" value="Lucky">
    </div>
    </div>
    </div>
    <hr class="horizontal dark">
    <p class="text-uppercase text-sm">Contact Information</p>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Address</label>
    <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">City</label>
    <input class="form-control" type="text" value="New York">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Country</label>
    <input class="form-control" type="text" value="United States">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">Postal code</label>
    <input class="form-control" type="text" value="437300">
    </div>
    </div>
    </div>
    <hr class="horizontal dark">
    <p class="text-uppercase text-sm">About me</p>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <label for="example-text-input" class="form-control-label">About me</label>
    <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
@endsection
