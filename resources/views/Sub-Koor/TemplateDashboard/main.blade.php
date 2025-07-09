@include('TU-Bidang/TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('TU-Bidang/TemplateDashboard/navbar')

        @include('TU-Bidang/TemplateDashboard/sidebar')

        @yield('content')

        @include('TU-Bidang/TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('TU-Bidang/TemplateDashboard/script')
</body>
<!--end::Body-->

</html>