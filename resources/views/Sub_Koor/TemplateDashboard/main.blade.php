@include('Sub_Koor/TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('Sub_Koor/TemplateDashboard/navbar')

        @include('Sub_Koor/TemplateDashboard/sidebar')

        @yield('content')

        @include('Sub_Koor/TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('Sub_Koor/TemplateDashboard/script')
</body>
<!--end::Body-->

</html>