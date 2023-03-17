@extends('dashboard.layouts.main')
@section('container')
<form action="proses_topup" class="mt-7 mx-5" method="post">
@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nomor Rekening Bank Ypc</label>
          <input name="" type="text" class="form-control" id="exampleFormControlInput1" placeholder="0011234738038276835074857" readonly>
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nominal Topup</label>
          <input name="saldo" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
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
