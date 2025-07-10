@include('Sekretaris_Dinas/TemplateDashboard/header')
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        @include('Sekretaris_Dinas/TemplateDashboard/navbar')

        @include('Sekretaris_Dinas/TemplateDashboard/sidebar')

        @yield('content')

        @include('Sekretaris_Dinas/TemplateDashboard/footer')
    </div>
    <!--end::App Wrapper-->
    @include('Sekretaris_Dinas/TemplateDashboard/script')
</body>
<!--end::Body-->

</html>