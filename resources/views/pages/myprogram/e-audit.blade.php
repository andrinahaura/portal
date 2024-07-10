@extends('layouts.app')

@section('title')
e-audit
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

.textbaru{
  color: #ffffff;
  /* background-image: linear-gradient(310deg, #750b30 50%, #bd005f 100%) !important;
  box-shadow: inset 0 0px 1px 1px rgba(117, 11, 48, 0.5), 0 20px 27px 0 rgba(0, 0, 0, 0.05) !important; */
  background-image: linear-gradient(310deg, #750b30 50%, #bd005f 100%) !important;
box-shadow: inset 0 0px 3px rgba(117, 11, 48, 0.3), 0 5px 10px rgba(0, 0, 0, 0.1) !important;
transition: background-image 0.3s ease-in-out, box-shadow 0.3s ease-in-out;

}
.textbaru h6{
  color: #ffffff;
}

.menuwhite {
  background-color: #ffffff !important;
}
  </style>
@endsection

@section('navbar')
<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb ">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-0 px-0 me-sm-6 me-5">
        <h6 class="font-weight-bolder mb-0">Download</h6>
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
        {{-- <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div> --}}
      </div>

      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-body font-weight-bold px-0" target="_blank">
            <i class="fa fa-sign-out-alt me-sm-1"></i>
            <span class="d-sm-inline d-none">Log Out</span>
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

   

  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam quaerat labore sunt ipsam consequuntur optio?</p>

@endsection

@section('scripts')

@endsection