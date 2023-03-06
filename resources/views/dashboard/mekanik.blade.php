@extends('dashboard.layouts.main')
@section('container')
<div class="card mb-4 mt-4 mx-4">
    <div class="card-header pb-0">
        <a href="daftar_mekanik">
        <button class="btn btn-icon btn-3 btn-primary" type="button">
            <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
          <span class="btn-inner--text"> Add Mekanik</span>
        </button>
    </a>
      <h6>Data Mekanik</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center justify-content-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Mekanik</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status Aktivasi</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($database as $data )
            <tr>
              <td>
                <div class="d-flex px-2">
                  <div>
                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                  </div>
                  <div class="my-auto">
                    <h6 class="mb-0 text-sm">{{ $data->nama }}</h6>
                  </div>
                </div>
              </td>
              <td>
                {{-- jika sudah di aktivasi --}}
                @if ($data->statusAktivasi === '1')
                <form action="update_mekanik" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <input type="hidden" name="status" value="0">
                <button class="btn btn-success">Sudak Aktive</button>
                </form>
                @endif
                {{-- end --}}
                {{-- jika belum di aktivasi --}}
                @if ($data->statusAktivasi === '0')
                <form action="update_mekanik" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <input type="hidden" name="status" value="1">
                <button class="btn btn-danger">Belum Aktive</button>
                </form>
                @endif
                {{-- end --}}
              </td>
              <td>
                <span class="text-xs font-weight-bold">working</span>
              </td>
              <td class="align-middle text-center">
                <div class="d-flex align-items-center justify-content-center">
                  <span class="me-2 text-xs font-weight-bold">10%</span>
                  <div>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%;"></div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="align-middle">
                <button class="btn btn-link text-secondary mb-0">
                  <i class="fa fa-ellipsis-v text-xs"></i>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
