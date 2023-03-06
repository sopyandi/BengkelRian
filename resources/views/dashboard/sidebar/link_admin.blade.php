<li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Pages</h6>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('member*') ? 'active' : ''}}" href="/member">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-zoom-split-in text-warning text-sm opacity-10"></i> --}}
            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>

        </div>
        <span class="nav-link-text ms-1">Data Member</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('mekanik*') ? 'active' : ''}} " href="/mekanik">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            {{-- <i class="ni ni-credit-card text-success text-sm opacity-10"></i> --}}
            <i class="ni ni-badge text-success text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Data Mekanik</span>
    </a>
</li>
<li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Repair Pages</h6>
</li>
<li class="nav-item">
    <a class="nav-link {{Request::is('kerusakan*') ? 'active' : ''}} " href="/kerusakan">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Jenis Kerusakan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link " href="pages/rtl.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Laporan Perbaikan</span>
    </a>
</li>
