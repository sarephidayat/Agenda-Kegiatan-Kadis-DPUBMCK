@include('Staff/TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('Staff/TemplateDashboard/navbar')

        @include('Staff/TemplateDashboard/sidebar')

        @yield('content')

        @include('Staff/TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('Staff/TemplateDashboard/script')
</body>
<!--end::Body-->

</html>