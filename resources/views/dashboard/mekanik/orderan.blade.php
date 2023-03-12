@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid py-4">
<div class="card">
<div class="card-header pb-0">
    {{-- <button class="btn btn-icon btn-3 btn-primary" type="button">
        <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
      <span class="btn-inner--text">With icon</span>
    </button> --}}
<h6>Orderan</h6>
</div>
<div class="table-responsive">
<table class="table align-items-center mb-0">
<thead>
<tr>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengaju Perbaikan</th>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto Kendaraan</th>
  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Keterangan</th>
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
    <p>{{ $data->keterangan}}</p>
  </td>
  <td class="align-middle text-center">
    <span class="text-secondary text-xs font-weight-bold"></span>
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
