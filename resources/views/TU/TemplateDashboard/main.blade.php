@include('TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('TemplateDashboard/navbar')

        @include('TemplateDashboard/sidebar')

        @yield('content')

        @include('TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('TemplateDashboard/script')
</body>
<!--end::Body-->

</html>