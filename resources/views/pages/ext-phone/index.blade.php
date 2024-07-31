@extends('layouts.app')

@section('title')
    Ext Phone
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
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-0 px-0 me-sm-6 me-5">
                    <h6 class="font-weight-bolder mb-0">Ext Phone</h6>
                </ol>
            </nav>

            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

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

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-white">
                        <div class="card-body p-2 pb-3">
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form id="filterForm" method="GET" action="{{ route('extphone.index') }}">
                                                <label class="form-label">Filter by</label>
                                                <select class="form-control" name="department" id="choices-department"
                                                    onchange="submitForm()">
                                                    <option value="">ALL</option>
                                                    @foreach ($departments as $department)
                                                        {{-- <option value="{{ $department }}">{{ $department }}</option> --}}
                                                        <option value="{{ $department }}"
                                                            {{ request('department') == $department ? 'selected' : '' }}>
                                                            {{ $department }}</option>
                                                    @endforeach
                                                    {{-- <option value="Your Question" disabled>Your Question</option> --}}
                                                </select>
                                            </form>

                                        </div>
                                        <div class="col-sm-6">
                                            <form action="">
                                                <label class="form-label">Search</label>
                                                <div class="input-group">
                                                    <span class="input-group-text text-body"><i class="fas fa-search"
                                                            aria-hidden="true"></i></span>
                                                    <input id="searchInput" class="form-control" type="text"
                                                        placeholder="Find User">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul id="itemList">
                <li>
                    <div class="row mt-4" id="phoneContainer">
                        @foreach ($phones as $phone)
                            <div class="col-lg-2 col-md-4 col-6 mt-sm-0 mt-4 phone-item table-row">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="96px" viewBox="0 -960 960 960"
                                            width="96px" fill="#750b30">
                                            <path class=""
                                                d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113Z" />
                                        </svg>
                                        <h6 class="mb-0 font-weight-bolder name">{{ $phone->name }}</h6>
                                        <p class="opacity-8 mb-3 text-sm">{{ $phone->no_ext }}</p>
                                        <hr class="horizontal dark mt-1 mb-0">
                                        <h6 class="mb-0 font-weight-bolder">Department</h6>
                                        <p class="opacity-8 mb-0 text-sm">{{ $phone->department }}</p>
                                        <hr class="horizontal dark mt-1 mb-0">
                                        <h6 class="mb-0 font-weight-bolder">Location</h6>
                                        <p class="opacity-8 mb-0 text-sm">{{ $phone->location }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </li>
            </ul>
            {{-- <button class="btn bg-gradient-primary" id="showMoreBtn">Show More</button> --}}
            {{-- <button id="scrollToTopBtn" style="display: none;">↑ Top</button> --}}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="../../../assets/js/plugins/choices.min.js"></script>
    <script>
        if (document.getElementById('choices-department')) {
            var element = document.getElementById('choices-department');
            const example = new Choices(element);
        }
    </script>

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const itemsPerPage = 10; 
        //     let currentPage = 1;

        //     const phoneItems = document.querySelectorAll('.phone-item');
        //     const totalItems = phoneItems.length;
        //     const showMoreBtn = document.getElementById('showMoreBtn');

        //     function showItems(page) {
        //         const start = 0; 
        //         const end = page * itemsPerPage; 

        //         phoneItems.forEach((item, index) => {
        //             if (index >= start && index < end) {
        //                 item.style.display = 'block';
        //             } else {
        //                 item.style.display = 'none';
        //             }
        //         });

        //         if (end >= totalItems) {
        //             showMoreBtn.style.display = 'none';
        //         }
        //     }

        //     showMoreBtn.addEventListener('click', () => {
        //         currentPage++;
        //         showItems(currentPage);
        //     });

        //     // Initial load
        //     showItems(currentPage);
        // });
    </script>

    {{-- <script>
        function submitForm() {
            var form = document.getElementById('filterForm');
            var formData = new FormData(form);
            var params = new URLSearchParams(formData).toString();

            fetch('{{ route('extphone.index') }}?' + params)
                .then(response => response.text())
                .then(data => {
                    var parser = new DOMParser();
                    var doc = parser.parseFromString(data, 'text/html');
                    var newPhoneContainer = doc.getElementById('phoneContainer').innerHTML;
                    document.getElementById('phoneContainer').innerHTML = newPhoneContainer;
                })
                .catch(error => console.log('Error:', error));
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var searchInput = document.getElementById('searchInput');

            searchInput.addEventListener('keyup', function() {
                var query = searchInput.value.toLowerCase();
                var items = document.querySelectorAll('#phoneContainer .phone-item');

                items.forEach(function(item) {
                    var name = item.querySelector('h6.name').textContent.toLowerCase();

                    if (name.indexOf(query) > -1 || query === '') {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script> --}}

    <script>
      function submitForm() {
          var form = document.getElementById('filterForm');
          var formData = new FormData(form);
          var params = new URLSearchParams(formData).toString();

          fetch('{{ route('extphone.index') }}?' + params)
              .then(response => response.text())
              .then(data => {
                  var parser = new DOMParser();
                  var doc = parser.parseFromString(data, 'text/html');
                  var newPhoneContainer = doc.getElementById('phoneContainer').innerHTML;
                  document.getElementById('phoneContainer').innerHTML = newPhoneContainer;

                  // Apply staggered fade-in-up animation
                  applyStaggeredAnimation();
              })
              .catch(error => console.log('Error:', error));
      }

      function applyStaggeredAnimation() {
          var items = document.querySelectorAll('#phoneContainer .phone-item');
          items.forEach(function(item, index) {
              item.style.animationDelay = `${index * 0.1}s`;
              item.classList.add('fade-in-up');
          });
      }
  </script>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
          var searchInput = document.getElementById('searchInput');

          searchInput.addEventListener('keyup', function() {
              var query = searchInput.value.toLowerCase();
              var items = document.querySelectorAll('#phoneContainer .phone-item');

              items.forEach(function(item) {
                  var name = item.querySelector('h6.name').textContent.toLowerCase();

                  if (name.indexOf(query) > -1 || query === '') {
                      item.style.display = '';
                      item.classList.add('fade-in-up');
                  } else {
                      item.style.display = 'none';
                  }
              });

              applyStaggeredAnimation();
          });

          // Apply staggered fade-in-up animation on initial load
          applyStaggeredAnimation();
      });
  </script>
  
    
@endsection
