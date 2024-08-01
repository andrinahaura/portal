@extends('layouts.app')

@section('title')
    download
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

        .table-row {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .table-row.visible {
            opacity: 1;
            transform: translateY(0);
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
                        <h6 class="font-weight-bolder mb-0">Download</h6>
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
    {{-- begin --}}
    @foreach ($fileTypes as $fileType)
        <div class="row mb-4">
            <div class="col-lg-12 position-relative">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">{{ $fileType->name }}</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center ">
                            <tbody>
                                @foreach ($fileType->files as $file)
                                    {{-- <tr class="table-row">
                    <td class="">
                      <div class="d-flex px-2 py-2 align-items-center">
                        <div class="ms-4">
                          <h6 class="text-sm mb-0">{{ $file->name}}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <a href="your-link-here" class="icon-link" title="Download">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                        </a>
                      </div>
                    </td>
                  </tr> --}}
                                    <tr class="table-row">
                                        <td class="">
                                            <div class="d-flex px-3 py-2 align-items-center">
                                                <div class="ms-3 flex-grow-1">
                                                    <h6 class="text-sm mb-0">{{ $file->name }}</h6>
                                                </div>
                                                <div class="ms-1">
                                                    <a href="{{ env('URL_FILE') . $file->file_dir }}" class="icon-link" title="Download" download target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#344767">
                                                            <path
                                                                d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- end --}}
@endsection

@section('scripts')
    <script>
        //   document.addEventListener("DOMContentLoaded", function() {
        //     const rows = document.querySelectorAll('.table-row');
        //     rows.forEach((row, index) => {
        //         setTimeout(() => {
        //             row.classList.add('visible');
        //         }, index * 80); // Delay bertambah untuk setiap baris
        //     });
        // });

        document.addEventListener("DOMContentLoaded", function() {
            const rows = document.querySelectorAll('.table-row');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                        }, index * 80);
                        observer.unobserve(entry.target); // Menghentikan observasi setelah elemen terlihat
                    }
                });
            }, {
                threshold: 0.1
            });

            rows.forEach(row => {
                observer.observe(row);
            });
        });
    </script>
@endsection
