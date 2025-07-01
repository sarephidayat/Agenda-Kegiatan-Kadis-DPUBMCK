@include('TU/TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('TU/TemplateDashboard/navbar')

        @include('TU/TemplateDashboard/sidebar')

        @yield('content')

        @include('TU/TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('TU/TemplateDashboard/script')
</body>
<!--end::Body-->

</html>