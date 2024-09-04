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
    @php $userCompanyId = auth()->user()->company_id; @endphp
    @if ($userCompanyId == 3100)
        <link rel="icon" type="image/png" href="../../assets/img/logo_antvgo_blank.png">
    @elseif($userCompanyId == 2)
        <link rel="icon" type="image/png" href="../../assets/img/logo_tvOne_blank.png">
    @elseif($userCompanyId == 3112)
        <link rel="icon" type="image/png" href="../../assets/img/logo_vivat_blank.png">
    @else
    @endif
    <title>@yield('title', 'PORTAL VIVAT')</title>
    @include('layouts.partials.styles')
    @yield('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
{{-- end::head --}}
<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative  h-100 border-radius-lg ">
        <!-- begin::Navbar -->
        @yield('navbar')
        <!-- End::Navbar -->
        {{-- begin::content --}}
        <div class="container-fluid py-4">
            @yield('content')
            @yield('footer')
        </div>
        {{-- end::content --}}
    </main>
    @include('layouts.partials.footer')
    
    @include('layouts.partials.scripts')
    @yield('scripts')
</body>
</html>
