@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid py-4">
<div class="card">
    <div class="card-header pb-0">
        <a href="tambah_jenis_kerusakan">
        <button class="btn btn-icon btn-3 btn-primary" type="button">
            <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
          <span class="btn-inner--text"> Add Jenis Kerusakan</span>
        </button>
    </a>
      <h6>Jenis Kerusakan</h6>
    </div>
<div class="table-responsive">
<table class="table align-items-center mb-0">
<thead>
<tr>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kerusakan</th>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
  <th class="text-secondary opacity-7"></th>
</tr>
</thead>
<tbody>
@foreach($database as $data)
<tr>
  <td>
    <div class="d-flex px-2 py-1">
      <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-xs">{{ $data->jenisKerusakan }}</h6>
      </div>
    </div>
  </td>
  <td>
    <p class="text-xs font-weight-bold mb-0">{{ $data->deskripsi }}</p>
  </td>
  <td class="align-middle">
    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
      Edit
    </a>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
