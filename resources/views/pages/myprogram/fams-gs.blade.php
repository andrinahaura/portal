@extends('layouts.app')

@section('title')
bookingmeeting
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

.textbaru li{
  color: #ffffff !important;
}

.textwhite {
  color: #ffffff !important;
}


.menuwhite {
  background-color: #ffffff !important;
}
  </style>
@endsection

@section('navbar')
<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 blur shadow-blur shadow-none border-radius-xl z-index-sticky bg-gradient-primary" id="navbarBlur" data-scroll="true" type="blur">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb" class="col-md-2 me-3">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0">
        <li class="breadcrumb-item text-sm">
          <a class="opacity-3 text-dark" href="javascript:;">
            {{-- <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>shop </title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(0.000000, 148.000000)">
                      <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                      <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg> --}}
            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="14px" viewBox="0 -960 960 960" width="14px" fill="#fff">
              <path d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v640q0 33-23.5 56.5T720-80H240Zm200-720v245q0 12 9.5 17.5t20.5-.5l49-29q10-6 20.5-6t20.5 6l49 29q11 6 21 .5t10-17.5v-245H440Z"/>
            </svg> --}}
          </a>
        </li>
        {{-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li> --}}
        <li class="text-sm text-white active" aria-current="page">My Program</li>
        
      </ol>
      <h6 class="font-weight-bolder text-white mb-0 px-0 ">Fams GS</h6>
    </nav>

    <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none text-white">
      <a href="javascript:;" class="nav-link text-white p-0">
        <div class="sidenav-toggler-inner" style="color: white;">
          <i class="sidenav-toggler-line" style="background-color: white;"></i>
          <i class="sidenav-toggler-line" style="background-color: white;"></i>
          <i class="sidenav-toggler-line" style="background-color: white;"></i>
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
          <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-white font-weight-bold px-0" target="_blank">
            <i class="fa fa-sign-out-alt me-sm-1" style="color: white;"></i>
            <span class="d-sm-inline d-none" style="color: white;">Log Out</span>
          </a>
        </li>

        <li class="nav-item d-xl-none ps-3 d-flex align-items-center text-white">
          <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner" style="color: white;">
              <i class="sidenav-toggler-line" style="background-color: white;"></i>
              <i class="sidenav-toggler-line" style="background-color: white;"></i>
              <i class="sidenav-toggler-line" style="background-color: white;"></i>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
@endsection

@section('content')
<iframe src="{{ $url }}" width="100%" height="600" frameborder="0" style="border:0;"></iframe>

@endsection

@section('scripts')

@endsection