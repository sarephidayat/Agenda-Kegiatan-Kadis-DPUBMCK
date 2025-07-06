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
            <span class="brand-text fw-light">TU-Bidang Bidang</span>
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
                    <a href="/TU-Bidang" class="nav-link">
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
                    <a href="/TU-Bidang/daftarAgenda" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Daftar Peminjam
                        </p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->