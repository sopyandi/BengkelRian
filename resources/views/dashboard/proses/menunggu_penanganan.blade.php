@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid py-4">
    <div class="card">
    <div class="card-header pb-0">
    <h6>Menunggu Respon Mekanik</h6>
    </div>
    <div class="table-responsive">
    <table class="table align-items-center mb-0">
    <thead>
    <tr>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto Kendaraan</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kerusakan</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
      <th class="text-secondary opacity-7"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>
        <img src="storage/{{ $database->Kerusakan->fotokendaraan}}" style="width:100px;border-radius:10px;">
      </td>
      <td>
        <p>{{ $database->JenisKerusakan->jenisKerusakan}}</p>
      </td>
      <td class="align-middle text-center">
        <button class="btn btn-icon btn-2 btn-success py-1">
            <div class="row">
                <div class="col">
                    <a href="#!" class="text-light font-weight-bold text-lg" data-toggle="tooltip" data-original-title="Edit user">
                        Prosess
                      </a>
                </div>
            </div>
            </button>
            <span class="text-secondary text-xs font-weight-bold"></span>
        </td>
            </tr>
              </tbody>
          </table>
        </div>
        </div>
@endsection
