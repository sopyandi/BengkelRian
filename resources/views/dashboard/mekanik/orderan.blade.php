@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid py-4">
<div class="card">
<div class="card-header pb-0">
<h6>Orderan</h6>
</div>
<div class="table-responsive">
<table class="table align-items-center mb-0">
<thead>
<tr>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengaju Perbaikan</th>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto Kendaraan</th>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kerusakan</th>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Keterangan</th>
  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mony</th>
  <th class="text-secondary opacity-7"></th>
</tr>
</thead>
<tbody>
@foreach($database as $data)
<tr>
  <td>
    <div class="d-flex px-2 py-1">
      <div>
        <img src="storage/{{ $data->Kerusakan->Member->foto }}" class="avatar">
      </div>
      <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-xs mx-2">{{ $data->Kerusakan->Member->nama }}</h6>
        <p class="text-xs text-secondary mb-0 mx-2">{{ $data->Kerusakan->Member->nama }}</p>
      </div>
    </div>
  </td>
  <td>
    <img src="storage/{{ $data->Kerusakan->fotokendaraan}}" style="width:100px;border-radius:10px;">
  </td>
  <td>
    <p>{{ $data->JenisKerusakan->jenisKerusakan}}</p>

  </td>
  <td>
    <p>{{ $data->keterangan}}</p>
  </td>
  <td class="align-middle text-center">
    <form action="ambil_orderan" method="post">
        @csrf
        <input type="hidden" value="{{$data->Kerusakan->id}}" name="id">
        <input type="hidden" value="{{$data->Kerusakan->id}}" name="kerusakan_id">
        <button class="btn btn-icon btn-3 btn-success">
            <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
        <span class="btn-inner--text">Ambil</span>
    </button>
</form>
  </td>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
@endsection
