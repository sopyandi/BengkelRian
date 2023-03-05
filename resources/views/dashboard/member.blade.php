@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid py-4">
<div class="card">
<div class="card-header pb-0">
<h6>Data Member</h6>
</div>
<div class="table-responsive">
<table class="table align-items-center mb-0">
<thead>
<tr>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Member</th>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nik & No Hp</th>
  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Technology</th>
  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
  <th class="text-secondary opacity-7"></th>
</tr>
</thead>
<tbody>
@foreach($database as $data)
<tr>
  <td>
    <div class="d-flex px-2 py-1">
      <div>
        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
      </div>
      <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-xs">{{ $data->nama }}</h6>
        <p class="text-xs text-secondary mb-0">{{ $data->email}}</p>
      </div>
    </div>
  </td>
  <td>
    <p class="text-xs font-weight-bold mb-0">Nik : {{ $data->nik }}</p>
    <p class="text-xs text-secondary mb-0">No Hp : {{ $data->nohp }}</p>
  </td>
  <td class="align-middle text-center text-sm">
    {{-- <p>rian sopyandi</p> --}}
  </td>
  <td class="align-middle text-center">
    <span class="text-secondary text-xs font-weight-bold">{{ $data->alamat }}</span>
  </td>
  <td class="align-middle">
    <a href="{{ url('update-member').'/'.$data->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
