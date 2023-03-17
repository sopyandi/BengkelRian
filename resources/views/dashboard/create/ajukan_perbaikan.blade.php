@extends('dashboard.layouts.main')
@section('container')
<form action="tambah_diagnosa_kerusakan" class="mt-7 mx-5" method="post">
@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Pelat nomor Mobil Anda</label>
          {{-- <input name="pelat_nomor" type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> --}}
          <select name="pelat_nomor" id="" class="form-control">
            <option value=""></option>
            {{-- @foreach($database_kerusakan as $data) --}}
            <option value="{{ $database_kerusakan->id }}">{{ $database_kerusakan->pelatnomor }}</option>
            {{-- @endforeach --}}
          </select>
        </div>
      </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Jenis Kerusakan</label>
          <select name="id_jenis_kerusakan" id="" class="form-control">
            <option value=""></option>
            @foreach($database_jenis_kerusakan as $data)
            <option value="{{ $data->id }}">{{ $data->jenisKerusakan }}</option>
            @endforeach
          </select>
        </div>
      </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label" for="basic-url">Keterangan</label>
          <textarea name="keterangan" id="" cols="69" rows="5" class="form-control">
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
