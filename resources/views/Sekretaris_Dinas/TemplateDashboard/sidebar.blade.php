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
            <img src="{{ asset('storage/img/logo-jateng.jpg') }}" class="user-image rounded-circle shadow " style="width: 40px; height: 40px;" alt="User Image" />
            <span class="brand-text fw-light">Sekretaris Dinas</span>
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
                    <a href="/sekretaris-dinas" class="nav-link">
                        <i class="nav-icon bi bi-house-door"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">AGENDA KEPALA DINAS</li>
                <li class="nav-item">
                    <li class="nav-item">
                        <a href="/sekretaris-dinas/agenda-eksternal" class="nav-link">
                            <i class="nav-icon bi bi-calendar-event"></i>
                            <p>Agenda Eksternal</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/sekretaris-dinas/agenda-internal" class="nav-link">
                            <i class="nav-icon bi bi-calendar-event"></i>
                            <p>Agenda Internal</p>
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