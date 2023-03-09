@extends('dashboard.layouts.main')
@section('container')
<form action="create_mekanik" class="mt-7 mx-5" method="post">
@csrf
<input name="id" type="hidden" value="">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Nama</label>
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
    <div class="col-md-6">
        <div class="form-group">
            @if(Auth::user()->level === 'member')
            <label class="form-control-label" for="basic-url">Nama Member Anda</label>
            @endif
            @if(Auth::user()->level === 'admin')
            <label class="form-control-label" for="basic-url">Nama Member Yang Akan Di Daftarkan</label>
            @endif
            <select name="idmember" id="" class="form-control">
                <option value=""></option>
                @foreach ($database as $data)
                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
            </select>
          {{-- <input name="idmember" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
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
