@extends('layouts.app')

@section('title')
    dashboard
@endsection

@section('styles')
    <style>
        .icon-dashboard.icon-shape-dashboard {
            width: 80px;
            height: 80px;
        }

        .icon-dashboard.icon-shape-dashboard svg {
            width: 48px;
            height: 48px;
        }

        .textbaru {
            color: #ffffff;
            background-image: linear-gradient(310deg, #750b30 50%, #bd005f 100%) !important;
            box-shadow: inset 0 0px 3px rgba(117, 11, 48, 0.3), 0 5px 10px rgba(0, 0, 0, 0.1) !important;
        }

        .textbaru h6 {
            color: #ffffff;
        }

        .menuwhite {
            background-color: #ffffff !important;
        }

        .card-dashboard {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
            --bs-card-spacer-y: 1rem;
            --bs-card-spacer-x: 1rem;
            --bs-card-title-spacer-y: 0.5rem;
            --bs-card-border-width: 0;
            --bs-card-border-color: rgba(0, 0, 0, 0.125);
            --bs-card-border-radius: 1rem;
            --bs-card-box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
            --bs-card-inner-border-radius: 1rem;
            --bs-card-cap-padding-y: 0.5rem;
            --bs-card-cap-padding-x: 1rem;
            --bs-card-cap-bg: #fff;
            --bs-card-cap-color: ;
            --bs-card-height: ;
            --bs-card-color: ;
            --bs-card-bg: #fff;
            --bs-card-img-overlay-padding: 1rem;
            --bs-card-group-margin: 0.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: var(--bs-card-height);
            word-wrap: break-word;
            background-color: var(--bs-card-bg);
            background-clip: border-box;
            border: var(--bs-card-border-width) solid var(--bs-card-border-color);
            border-radius: var(--bs-card-border-radius);
        }

        .card-dashboard:hover {
            transform: translateY(-5px);
            /* Menggeser card ke atas */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            /* Bayangan lebih kuat */
        }

        @media (min-width: 992px) {
            .col-5th {
                width: 20%;
                float: left;
            }
        }

        .btn-logout {
            margin-bottom: 1rem;
            letter-spacing: -0.025rem;
            text-transform: uppercase;
            background-size: 150%;
            background-position-x: 25%;
        }

        @media (max-width: 767.98px) {
            .brand-logo {
                width: 30px;
                height: 30px;
            }
        }

        @media (min-width: 768px) {
            .brand-logo {
                width: 60px;
                height: 60px;
            }
        }

        .bg-color {
            color: #750b30;
        }

        .row.flex-nowrap {
            white-space: nowrap;
            overflow-x: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .row.flex-nowrap::-webkit-scrollbar {
            display: none;
        }

        .arrow-btn {
            cursor: pointer;
            padding: 10px;
            border: none;
            background-color: transparent;
            transition: opacity 0.3s ease-in-out;
        }

        #cardContainer {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            white-space: nowrap;
        }

        .arrow-btn.hidden {
            opacity: 0;
            pointer-events: none;
        }


        @media (max-width: 768px) {
            .col-auto.d-flex.align-items-center {
                justify-content: center;
                width: 100%;
                margin-top: 10px;
            }
        }

        @media (min-width: 769px) {
            .col-auto.d-flex.align-items-center {
                justify-content: flex-end;
                margin-left: auto;
            }
        }

        .banner-img {
            max-width: 100px;
            width: auto;
            height: auto;
            z-index: 1;
        }


        @media (max-width: 768px) {
            .banner-img {
                max-width: 80% !important;
            }
        }

        .fade-effect {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .fade-effect.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endsection

@section('navbar')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        @php $userCompanyId = auth()->user()->company_id; @endphp
        <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid py-1 fade-effect">
                <a class="navbar-brand" href="#">
                    @if ($userCompanyId == 3100)
                    <img class="brand-logo" src="../../assets/img/logo_antvgo_blank.png" width="60" height="60"
                    alt="Brand Logo">
                    @elseif ($userCompanyId == 2)
                    <img class="brand-logo" src="../../assets/img/logo_tvOne_blank.png" width="60" height="60"
                    alt="Brand Logo">
                    @elseif ($userCompanyId == 3112)
                    <img class="brand-logo" src="../../assets/img/logo_vivat_blank.png" width="60" height="60"
                    alt="Brand Logo">
                    @endif
                </a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-2 ps-2 me-sm-6 me-5">
                        <h6 class="text-white font-weight-bolder ms-2">Dashboard</h6>
                    </ol>
                </nav>
                {{-- <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none">
                    <a href="javascript:;" class="nav-link text-white p-0">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </div> --}}
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                    <ul class="navbar-nav justify-content-end ms-md-auto pe-md-3 d-flex align-items-center">
                        <li class="nav-item d-flex align-items-center">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="nav-link text-white font-weight-bold px-0">
                                @csrf
                                <button type="submit" class="btn-logout nav-link text-white font-weight-bold px-0"
                                    style="">
                                    <i class="fa fa-sign-out-alt me-sm-1"></i>
                                    <span class="d-sm-inline d-none">Log Out</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="page-header min-height-150 border-radius-xl mt-4 bg-gradient-primary fade-effect">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden fade-effect">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../../../assets/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ auth()->user()->username }}
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                {{ auth()->user()->department }}
                            </p>
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <a href="https://link-to-page1.com" class="avatar avatar-xl position-relative me-3" target="_blank">
                            <img src="../../../assets/img/vivat-go.png" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </a>
                        <a href="https://link-to-page2.com" class="avatar avatar-xl position-relative" target="_blank">
                            <img src="../../../assets/img/vivat-go.png" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100 fade-effect" data-delay="0">
        <div class="container-fluid">
            <div class="page-header min-height-100 border-radius-xl mt-4 bg-gradient-primary d-flex align-items-center justify-content-center fade-effect"
                data-delay="200">
                {{-- @foreach ($banners as $banner ) --}}
                {{-- <img src="{{ env('URL_FILE') . $banners->image_dir }}" alt="Logo" class="banner-img"
                style="max-width: 30%; height: 30%;"> --}}
                <span class="mask bg-gradient-primary opacity-6"></span>
                {{-- @endforeach --}}
                
            </div>
        </div>
    </div>



    <h3 class="text-center mt-3 mb-2 fade-effect" data-delay="400">What's On</h3>
    <div class="carousel-container mt-3 container-fluid" style="position: relative; display: flex; align-items: center;justify-content:center;"
        data-delay="600">
        {{-- <button class="arrow-btn fade-effect" onclick="scrollLeftFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#344767">
                <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
            </svg>
        </button> --}}
        <div id="cardContainer" class="row flex-nowrap overflow-auto" style="white-space: nowrap;">
            @php $delay = 0; @endphp
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $index )
                <div class="col-lg-2 col-md-4 col mb-4 fade-effect" data-delay="{{ $delay * 1 }}">
                    <div class="card card-profile card-plain"
                        style="box-shadow: 8px 8px 0 rgba(168, 168, 168, 0.5); width: 200px; height: 300px;"
                        data-bs-toggle="modal" data-bs-target="#imageModal{{ $index }}">
                        <div class="card-body text-center bg-white shadow border-radius-lg p-3" style="padding: 0;">
                            <a href="javascript:;" style="cursor: pointer; display: block; height: 100%;">
                                <img class="w-100 h-100 border-radius-md"
                                    src="./assets/img/{{ $index <= 6 ? 'banner.jpeg' : 'vivat-go.png' }}"
                                    style="object-fit: cover; background-position: 50%; background-size: cover;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="imageModal{{ $index }}" tabindex="-1"
                    aria-labelledby="imageModalLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel{{ $index }}">What's on</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <img class="w-100 border-radius-md"
                                    src="./assets/img/{{ $index <= 6 ? 'banner.jpeg' : 'vivat-go.png' }}">
                            </div>
                        </div>
                    </div>
                </div>
                @php $delay += 100; @endphp
            @endforeach
        </div>
        {{-- <button class="arrow-btn" onclick="scrollRightFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                fill="#344767">
                <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
            </svg>
        </button> --}}
    </div>

    <h3 class="text-center mt-2 mb-3 fade-effect" data-delay="100">Menu</h3>
    <div class="container-fluid fade-effect">
        <div class="row">
            <div class="col-lg-12 position-relative">
                <div class="row justify-content-center">
                    @php
                        $totalDashboardItems = count($dashboard);
                    @endphp

                    @foreach ($dashboard as $index => $dashboardItem)
                        <div class="col-lg-2 col-md-4 col-6 mt-sm-0 mt-4 fade-effect" data-delay="{{ $index * 100 }}">
                            <div class="card-dashboard mb-4">
                                <a href="{{ route('' . $dashboardItem->router . '') }}" class="card-body p-3 text-decoration-none text-dark">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <div
                                                class="icon-dashboard icon-shape-dashboard bg-gradient-primary shadow text-center d-flex align-items-center justify-content-center border-radius-md mb-3 mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                                    {!! $dashboardItem->svg !!}
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p class="mb-0 text-capitalize font-weight-bold">
                                                    {{ $dashboardItem->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($menus as $index => $menu)
                        <div class="col-lg-2 col-md-4 col-6 mt-sm-0 mt-4 fade-effect"
                            data-delay="{{ ($index + $totalDashboardItems) * 100 }}">
                            <div class="card-dashboard mb-4">
                                <a href="{{ $menu->menu->url }}" class="card-body p-3 text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <div
                                                class="icon-dashboard icon-shape-dashboard bg-gradient-primary shadow text-center d-flex align-items-center justify-content-center border-radius-md mb-3 mx-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                                    {!! $menu->menu->svg !!}
                                                </svg>
                                            </div>
                                            <div class="">
                                                <p class="mb-0 text-capitalize font-weight-bold">{{ $menu->menu->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center mt-2 mb-3 fade-effect" data-delay="500">Today's Birthday</h3>
    <div class="container-fluid fade-effect" data-delay="500">

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-4 mt-lg-0 mt-4 mb-4">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0">
                                <div class="avatar avatar-xl position-relative me-3">
                                    <img src="../../../assets/img/kal-visuals-square.jpg" alt="kal"
                                        class="border-radius-lg shadow">
                                </div>
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">Sophie B.</h6>
                                    <p class="mb-0 text-xs">Hi! I need more information..</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-lg-0 mt-4 mb-4">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0">
                                <div class="avatar avatar-xl position-relative me-3">
                                    <img src="../../../assets/img/kal-visuals-square.jpg" alt="kal"
                                        class="border-radius-lg shadow">
                                </div>
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John D.</h6>
                                    <p class="mb-0 text-xs">Can you provide more details?</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-lg-0 mt-4 mb-4">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0">
                                <div class="avatar avatar-xl position-relative me-3">
                                    <img src="../../../assets/img/kal-visuals-square.jpg" alt="kal"
                                        class="border-radius-lg shadow">
                                </div>
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John D.</h6>
                                    <p class="mb-0 text-xs">Can you provide more details?</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-lg-0 mt-4 mb-4">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0">
                                <div class="avatar avatar-xl position-relative me-3">
                                    <img src="../../../assets/img/kal-visuals-square.jpg" alt="kal"
                                        class="border-radius-lg shadow">
                                </div>
                                <div class="d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John D.</h6>
                                    <p class="mb-0 text-xs">Can you provide more details?</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection



@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
        function scrollLeftFunction() {
            let container = document.getElementById('cardContainer');
            if (container.scrollLeft > 0) {
                container.scrollBy({
                    left: -200,
                    behavior: 'smooth'
                });
            }
        }

        function scrollRightFunction() {
            let container = document.getElementById('cardContainer');
            if (container.scrollLeft + container.clientWidth < container.scrollWidth) {
                container.scrollBy({
                    left: 200,
                    behavior: 'smooth'
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-effect');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('is-visible');
                        }, entry.target.dataset.delay || 0);
                    } else {
                        entry.target.classList.remove('is-visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -10% 0px'
            });

            fadeElements.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
@endsection
