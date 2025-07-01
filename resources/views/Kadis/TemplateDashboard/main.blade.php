@include('Kadis/TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('Kadis/TemplateDashboard/navbar')

        @include('Kadis/TemplateDashboard/sidebar')

        @yield('content')

        @include('Kadis/TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('Kadis/TemplateDashboard/script')
</body>
<!--end::Body-->

</html>