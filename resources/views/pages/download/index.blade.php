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
          <a href="">
          <form href="../../pages/authentication/signin/illustration.html" class="nav-link text-body font-weight-bold px-0" target="_blank">
            <i class="fa fa-sign-out-alt me-sm-1"></i>
            <span class="d-sm-inline d-none">Log Out</span>
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

   

      {{-- <div class="row">
        <div class="col-lg-5 col-sm-6">
          <div class="card  mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                    <h5 class="font-weight-bolder mb-0">
                      $53,000
                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                    <h5 class="font-weight-bolder mb-0">
                      2,300
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                    <h5 class="font-weight-bolder mb-0">
                      +3,462
                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                    <h5 class="font-weight-bolder mb-0">
                      $103,430
                      <span class="text-success text-sm font-weight-bolder">+5%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- begin --}}
      @foreach ($fileTypes as  $fileType)
      <div class="row mb-4">
        <div class="col-lg-12 position-relative">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">{{ $fileType->name}}</h6>
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
                                <a href="your-link-here" class="icon-link" title="Download">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767">
                                        <path d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z" />
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

    {{-- begin --}}
    {{-- <div class="row mt-3">
      <div class="col-lg-12 position-relative">
        <div class="card">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-2">Format Request</h6>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center ">
              <tbody>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
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
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- end --}}

    {{-- Begin --}}
    {{-- <div class="row mt-3">
      <div class="col-lg-12 position-relative">
        <div class="card">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-2">Format Request</h6>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center ">
              <tbody>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="">
                    <div class="d-flex px-2 py-2 align-items-center">
                      <div class="ms-4">
                        <h6 class="text-sm mb-0">Form Klaim Pengobatan Karyawan</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#344767"><path  d="M200-160h560q17 0 28.5 11.5T800-120q0 17-11.5 28.5T760-80H200q-17 0-28.5-11.5T160-120q0-17 11.5-28.5T200-160Zm280-105q-9 0-17.5-4T448-281L250-535q-15-20-4-42.5t36-22.5h78v-240q0-17 11.5-28.5T400-880h160q17 0 28.5 11.5T600-840v240h78q25 0 36 22.5t-4 42.5L512-281q-6 8-14.5 12t-17.5 4Z"/></svg>
                    </div>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- End --}}
  

@endsection

@section('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll('.table-row');
    rows.forEach((row, index) => {
        setTimeout(() => {
            row.classList.add('visible');
        }, index * 80); // Delay bertambah untuk setiap baris
    });
});
</script>
@endsection