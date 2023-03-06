<li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Member Page</h6>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('daftar_mekanik*') ? 'active' : ''}}" href="daftar_mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-badge text-success text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Daftar Mekanik</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('daftar_mekanik*') ? '' : ''}}" href="daftar_mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-laptop text-danger text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Diagnosa Kerusakan</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{Request::is('daftar_mekanik*') ? '' : ''}}" href="daftar_mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-ambulance text-dark text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Data Kerusakan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('daftar_mekanik*') ? '' : ''}}" href="daftar_mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-map-big text-warning text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Entri Awal Perbaikan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('daftar_mekanik*') ? '' : ''}}" href="daftar_mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-watch-time text-success text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Entri Status Perbaikan</span>
    </a>
</li>
