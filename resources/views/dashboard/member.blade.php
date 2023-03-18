@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid py-4">
<div class="card">
<div class="card-header pb-0">
    <button class="btn btn-icon btn-3 btn-primary" type="button">
        <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
      <span class="btn-inner--text">With icon</span>
    </button>
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
        <img src="storage/{{ $data->user->member->foto }}" class="avatar avatar-sm me-3">
      </div>
      <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-xs">{{ $data->user->username}}</h6>
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
    <form action="update_member " method="post">
        @csrf
    {{-- <a href="{{ url('update_member').'/'.$data->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"> --}}
        <input type="hidden" name="id" value="{{ $data->id}}">
        {{-- <button>d</button> --}}
        <button class="btn btn-icon btn-2 btn-success py-1">
            <div class="row">
                <div class="col">
                    <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="#!" class="text-light font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                </div>
            </div>
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
