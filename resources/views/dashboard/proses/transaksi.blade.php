@extends('dashboard.layouts.main')
@section('container')
{{-- {{ Auth::user()->member->kerusakan }} --}}
@if($database != null)
<div class="container-fluid py-4">
    <div class="card">
    <div class="card-header pb-0">
    <h6>Data Kendaraan</h6>
    </div>
    <div class="table-responsive">
    <table class="table align-items-center mb-0 " border="1">
    <thead>
    <tr>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kendaraan</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pelat Nomor</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bengkel</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status pembayaran </th>
      <th class="text-secondary opacity-7"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>
        <img src="storage/{{ $database->Kerusakan->fotokendaraan }}" style="width:100px;border-radius:10px;">
      </td>
      <td>
        {{ $database->Kerusakan->pelatnomor }}
      </td>
      <td>
        {{ $database->Mekanik->nama }}
      </td>
      <td>
        <p>{{ $database->tanggal }}</p>
      </td>
      <td class="align-middle ">
            <span class="text text-lg font-weight-bold">Perlu Di Bayar</span>
            <p>Total Bayar : Rp. 500000,-</p>
        </td>
            </tr>
              </tbody>
          </table>

          <br>
          <div class="container">
            <br><br>
            <p style="color:red;">Jika anda belum menerima kondisi kendaraan dengan perbaikan sesuai yang anda harapkan <br>
                 mohon jangan dulu menekan tombol bayar di bawah terimakasih</p>
                 <br>
                <form action="bayar" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $database->id }}">
                    <button class="btn btn-icon btn-2 btn-success py-1">
                        <div class="row">
                            <div class="col">
                                {{-- <a href="" class="text-light font-weight-bold text-lg" data-toggle="tooltip" data-original-title="Edit user"> --}}
                                    Bayar
                                  {{-- </a> --}}
                            </div>
                        </div>
                        </button>
                </form>
          </div>
        </div>
        </div>
        @endif
        @if($database == null)
        <div class="container mt-8">
            <marquee behavior="" direction="">
        <marquee behavior="alternate" direction="down">
        <img src="img/no-logo.jpg" alt="">
            <h2>Belum Ada Transaksi</h2>
        </marquee>
    </marquee>
        </div>
        @endif
@endsection
