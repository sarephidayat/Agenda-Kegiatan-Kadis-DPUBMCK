@include('Sub-Koor/TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('Sub-Koor/TemplateDashboard/navbar')

        @include('Sub-Koor/TemplateDashboard/sidebar')

        @yield('content')

        @include('Sub-Koor/TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('Sub-Koor/TemplateDashboard/script')
</body>
<!--end::Body-->

</html>