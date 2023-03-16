@if(auth()->user()->mekanik->statusAktivasi === '0')
@if(auth()->user()->member != null)
<li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data Kendaraan Anda</h6>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('data_mobil*') ? 'active' : ''}}" href="data_mobil">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-ambulance text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Kendaraan</span>
    </a>
</li>
@endif
@if(auth()->user()->member == null)
<li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Guest Pages</h6>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('ajukan_perbaikan*') ? 'active' : ''}}" href="/intro">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-air-baloon text-danger text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Introduction</span>
    </a>
</li>
@endif
@if(auth()->user()->member != null)
<li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">member Pages</h6>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('ajukan_perbaikan*') ? 'active' : ''}}" href="ajukan_perbaikan">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-building text-danger text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Ajukan Perbaikan</span>
    </a>
</li>
@endif
@if(auth()->user()->member != null)
@if(auth()->user()->mekanik->member_id == null)
<li class="nav-item">
    <a class="nav-link {{Request::is('daftar_mekanik*') ? 'active' : ''}}" href="daftar_mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-badge text-success text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Daftarkan Bengkel Anda</span>
    </a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link {{Request::is('transaksi*') ? 'active' : ''}}" href="daftar_mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-credit-card text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Transaksi</span>
    </a>
</li>
@endif
@endif
@if(auth()->user()->mekanik->statusAktivasi === '1')
@include('dashboard/sidebar/link_mekanik')
@endif
