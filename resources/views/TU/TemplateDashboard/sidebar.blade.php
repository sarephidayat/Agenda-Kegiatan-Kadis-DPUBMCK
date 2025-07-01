<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            {{-- <img src="{{asset("AdminLTE-4.0.0-beta3")}}/dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" /> --}}
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">TU Bidang</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="/DaftarAlat" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Daftar Alat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/DaftarRuang" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Daftar Ruang
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="/DaftarPeminjam" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Daftar Peminjam
                        </p>
                    </a>
                </li>

                <li class="nav-header">PEMINJAMAN ALAT</li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="/approvalAlat" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Reservation Approval</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/approvalAlatComplete" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Reservation Complete</p>
                    </a>
                </li>
                </li>
                <li class="nav-header">PEMINJAMAN RUANG</li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="/approvalRuang" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Reservation Approval</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/approvalRuangComplete" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Reservation Complete</p>
                    </a>
                </li>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->