@extends('dashboard.layouts.main')
@section('container')
@if(Auth::user()->mekanik->statusAktivasi === '0')
<form action="create_mekanik" class="mt-7 mx-5" method="post">
@csrf
<input name="member_id" type="hidden" value="{{ Auth::user()->member->id }}">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nama Bengkel Anda</label>
          <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
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
</div>
<div class="row">
    <div class="col-md-6 ">
        <button class="btn btn-primary btn-lg w-100">Ajukan Pendaftaran</button>
    </div>
</div>
</form>
@endif
@endsection
