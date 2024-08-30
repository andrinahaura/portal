@extends('layouts.app')

@section('title')
    Whats On
@endsection

@section('styles')
    <style>
        .textbaru {
            color: #ffffff;
            /* background-image: linear-gradient(310deg, #750b30 50%, #bd005f 100%) !important;
          box-shadow: inset 0 0px 1px 1px rgba(117, 11, 48, 0.5), 0 20px 27px 0 rgba(0, 0, 0, 0.05) !important; */
            /* background-image: linear-gradient(310deg, #750b30 50%, #bd005f 100%) !important; */
            background-image: linear-gradient(310deg, #750b30 10%, #330513 100%) !important;
            box-shadow: inset 0 0px 3px rgba(117, 11, 48, 0.3), 0 5px 10px rgba(0, 0, 0, 0.1) !important;
            transition: background-image 0.3s ease-in-out, box-shadow 0.3s ease-in-out;

        }

        .textbaru h6 {
            color: #ffffff;
        }

        .menuwhite {
            background-color: #ffffff !important;
        }


        @media (min-width: 992px) {
            .col-5th {
                width: 20%;
                float: left;
            }
        }

        ul {
            padding-left: 0;
            list-style-type: none;
        }

        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            background-color: #750b30;
            color: #fff;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.5s ease-in-out forwards;
            opacity: 0;
        }


    </style>
@endsection

@section('navbar')
<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
id="navbarBlur" data-scroll="true">
<div class="container-fluid py-1 px-3">
    {{-- <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-0 px-0 me-sm-6 me-5">
            <a href="/dashboard" class="d-flex nav-link text-white align-items-center text-dark me-2">
                <i class="fas fa-arrow-left" style="font-size: 18px; margin-right: 8px;"></i>
            </a>
            <h6 class="font-weight-bolder">Download</h6>
        </ol>
    </nav> --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-0 px-0 me-sm-6 me-5 d-flex align-items-center">
            <a href="{{ route('dashboard.index') }}" class="d-flex nav-link text-white align-items-center text-dark">
                <i class="fas fa-arrow-left" style="font-size: 18px; margin-right: 20px;"></i>
                <h6 class="font-weight-bolder mb-0">Whats On</h6>
            </a>
        </ol>
    </nav>
    

    {{-- <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
        <a href="javascript:;" class="nav-link text-body p-0">
            <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
            </div>
        </a>
    </div> --}}

    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            {{-- <div class="input-group">
  <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
  <input type="text" class="form-control" placeholder="Type here...">
</div> --}}
        </div>

        <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
                <a href="">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="nav-link text-white font-weight-bold px-0">
                        @csrf
                    <button type="submit" class="btn-logout nav-link text-white font-weight-bold px-0" style="">
                        <i class="fa fa-sign-out-alt me-sm-1"></i>
                        <span class="d-sm-inline d-none">Log Out</span>
                    </button>
                    </form>  
                </a>
            </li>

            {{-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </li> --}}

        </ul>
    </div>
</div>
</nav>    
@endsection

@section('content')
<div class="carousel-container mt-3 container-fluid" data-delay="600">
        
        <div id="cardContainer" class="row">
            @php $delay = 0; @endphp
            @foreach ($whatsons as $index => $whatson )
            <div class="col-lg-3 col-xl-2 col-md-4 col mb-4 fade-effect d-flex align-items-center justify-content-center" data-delay="{{ $delay * 1 }}">
                <div class="card card-profile card-plain"
                    style="box-shadow: 8px 8px 0 rgba(168, 168, 168, 0.5); width: 200px; height: 300px;"
                    data-bs-toggle="modal" data-bs-target="#imageModal{{ $index }}">
                    <div class="card-body text-center bg-white shadow border-radius-lg p-3 d-flex justify-content-center" style="padding: 0;">
                        <a href="javascript:;" style="cursor: pointer; display: block; height: auto;">
                            <img class="w-100 h-100 border-radius-md"
                                src="{{ $whatson['cover']}}" alt="{{ $whatson['title']}}"
                                style="">
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
                            <button type="button" class="btn-close d-flex align-items-center" data-bs-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px" fill="#344767"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img class="w-100 border-radius-md"
                                src="{{ $whatson['img']}}" alt="{{ $whatson['title']}}">
                        </div>
                    </div>
                </div>
            </div>
            @php $delay += 100; @endphp
        @endforeach 
        </div>
    </div>

@endsection

@section('scripts')

    
@endsection
