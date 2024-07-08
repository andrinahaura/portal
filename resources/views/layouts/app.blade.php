<!--
=========================================================
* Soft UI Dashboard PRO - v1.1.1
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-dashboard-pro
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
{{-- begin::head --}}

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>@yield('title', 'PORTAL VIVAT')</title>
    @include('layouts.partials.styles')
    @yield('styles')
</head>
{{-- end::head --}}

<body class="g-sidenav-show  bg-gray-100">
    {{-- begin::aside --}}
    @include('layouts.partials.sidebar')
    {{-- end::aside --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- begin::Navbar -->
        @yield('navbar')
        <!-- End::Navbar -->
        {{-- begin::content --}}
        <div class="container-fluid py-4">
            @yield('content')
            @include('layouts.partials.footer')
        </div>
        {{-- end::content --}}

    </main>
    


    @include('layouts.partials.scripts')
    @yield('scripts')
</body>

</html>
