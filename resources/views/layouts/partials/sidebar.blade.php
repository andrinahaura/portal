{{-- <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html " target="_blank">
        <img src="#" class="navbar-brand-img h-100" alt="">
        <span class="ms-1 font-weight-bold">VIVAT GO</span>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a data-bs-toggle="" href="{{ route('dashboard.index')}}" class="nav-link {{ Route::is('dashboard.index') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path class="color-background" d="M560-600q-17 0-28.5-11.5T520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560ZM160-440q-17 0-28.5-11.5T120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160Zm400 320q-17 0-28.5-11.5T520-160v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560Zm-400 0q-17 0-28.5-11.5T120-160v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160Z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboards</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a data-bs-toggle="" href="{{ route('download.index')}}" class="nav-link {{ Route::is('download.index') ? 'active' : ''}} " aria-controls="pagesExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed" >
                    <path class="color-background" d="M260-160q-91 0-155.5-63T40-377q0-78 47-139t123-78q23-81 85.5-136T440-797v323l-36-35q-11-11-27.5-11T348-508q-11 11-11 28t11 28l104 104q12 12 28 12t28-12l104-104q11-11 11.5-27.5T612-508q-11-11-27.5-11.5T556-509l-36 35v-323q103 14 171.5 92.5T760-520q69 8 114.5 59.5T920-340q0 75-52.5 127.5T740-160H260Z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Download</span>
          </a>
        </li>
      
        <li class="nav-item">
            <a data-bs-toggle="" href="{{ route('extphone.index')}}" class="nav-link {{ Route::is('extphone.index') ? 'active' : ''}}" aria-controls="pagesExamples" role="button" aria-expanded="false">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path class="color-background" d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Ext. Phone</span>
            </a>
          </li>
      
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link " aria-controls="basicExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path class="color-background" d="M400-200q-17 0-28.5-11.5T360-240q0-17 11.5-28.5T400-280h400q17 0 28.5 11.5T840-240q0 17-11.5 28.5T800-200H400Zm0-240q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h400q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H400Zm0-240q-17 0-28.5-11.5T360-720q0-17 11.5-28.5T400-760h400q17 0 28.5 11.5T840-720q0 17-11.5 28.5T800-680H400ZM200-160q-33 0-56.5-23.5T120-240q0-33 23.5-56.5T200-320q33 0 56.5 23.5T280-240q0 33-23.5 56.5T200-160Zm0-240q-33 0-56.5-23.5T120-480q0-33 23.5-56.5T200-560q33 0 56.5 23.5T280-480q0 33-23.5 56.5T200-400Zm0-240q-33 0-56.5-23.5T120-720q0-33 23.5-56.5T200-800q33 0 56.5 23.5T280-720q0 33-23.5 56.5T200-640Z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">My Programs</span>
          </a>
         
          <div class="collapsw" id="basicExamples">
            <ul class="nav ms-4 ps-3">

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v640q0 33-23.5 56.5T720-80H240Zm200-720v245q0 12 9.5 17.5t20.5-.5l49-29q10-6 20.5-6t20.5 6l49 29q11 6 21 .5t10-17.5v-245H440Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">Booking Meeting<b class="caret"></b></span>
                </a>
              </li>

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M481-120q-17 0-28.5-11.5T441-160v-46q-45-10-79-35t-55-70q-7-14-.5-29.5T330-363q14-6 29 .5t23 21.5q17 30 43 45.5t64 15.5q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-44q0-17 11.5-28.5T481-840q17 0 28.5 11.5T521-800v44q38 6 66 24.5t46 45.5q9 13 3.5 29T614-634q-14 6-29 .5T557-653q-13-14-30.5-21.5T483-682q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v44q0 17-11.5 28.5T481-120Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">Budget<b class="caret"></b></span>
                </a>
              </li>

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-600q0-17 11.5-28.5T160-840q17 0 28.5 11.5T200-800v600h600q17 0 28.5 11.5T840-160q0 17-11.5 28.5T800-120H200Zm80-120q-17 0-28.5-11.5T240-280v-280q0-17 11.5-28.5T280-600h80q17 0 28.5 11.5T400-560v280q0 17-11.5 28.5T360-240h-80Zm200 0q-17 0-28.5-11.5T440-280v-480q0-17 11.5-28.5T480-800h80q17 0 28.5 11.5T600-760v480q0 17-11.5 28.5T560-240h-80Zm200 0q-17 0-28.5-11.5T640-280v-120q0-17 11.5-28.5T680-440h80q17 0 28.5 11.5T800-400v120q0 17-11.5 28.5T760-240h-80Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">Employee Self Service<b class="caret"></b></span>
                </a>
              </li>

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M176-183q-20 8-38-3.5T120-220v-180l320-80-320-80v-180q0-22 18-33.5t38-3.5l616 260q25 11 25 37t-25 37L176-183Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">Mailblast<b class="caret"></b></span>
                </a>
              </li>

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm198 322q11-18 16.5-38.5T720-240v-40q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v40q0 33-23.5 56.5T720-160h-22Zm102-360h-40q-17 0-28.5-11.5T720-560q0-17 11.5-28.5T760-600h40v-40q0-17 11.5-28.5T840-680q17 0 28.5 11.5T880-640v40h40q17 0 28.5 11.5T960-560q0 17-11.5 28.5T920-520h-40v40q0 17-11.5 28.5T840-440q-17 0-28.5-11.5T800-480v-40Zm-480 40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-240v-32q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v32q0 33-23.5 56.5T560-160H80q-33 0-56.5-23.5T0-240Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">Request Magang<b class="caret"></b></span>
                </a>
              </li>

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M168-121q-21 5-36.5-10.5T121-168l35-170 182 182-170 35Zm235-84L205-403l413-413q23-23 57-23t57 23l84 84q23 23 23 57t-23 57L403-205Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">e-Audit<b class="caret"></b></span>
                </a>
              </li>

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v187q0 17-11.5 28.5T800-493q-17 0-28.5-11.5T760-533v-27H200v400h232q17 0 28.5 11.5T472-120q0 17-11.5 28.5T432-80H200Zm520 40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40Zm20-208v-92q0-8-6-14t-14-6q-8 0-14 6t-6 14v91q0 8 3 15.5t9 13.5l61 61q6 6 14 6t14-6q6-6 6-14t-6-14l-61-61Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">e-Leave<b class="caret"></b></span>
                </a>
              </li>

              <li>
                <a class="nav-link" aria-expanded="false" href="#gettingStartedExample" role="button">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                            <path d="M480-120 377-91q-14 4-25.5-4.5T340-118q0-12 3-19.5t8-11.5l69-51v-220l-291 86q-19 5-34-6t-15-31q0-15 5-25t14-15l321-189v-220q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v220l321 189q9 5 14 15t5 25q0 20-15 31t-34 6l-291-86v220l69 51q5 4 8 11.5t3 19.5q0 14-11.5 22.5T583-91l-103-29Z"/>
                        </svg>
                    </div>
                  <span class="sidenav-normal">e-Travel<b class="caret"></b></span>
                </a>
              </li>
            </ul>
          </div>  
  
        </li>
     
      </ul>
    </div>
  </aside> --}}

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-primary " id="sidenav-main">
    <div class="sidenav-header ">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html " target="_blank">
        <img src="../../assets/img/logo_antvgo_blank.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Vivat Go</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a data-bs-toggle="" href="{{ route('dashboard.index')}}" class="nav-link {{ Route::is('dashboard.index') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                <title>Dashboard</title>
                <path class="color-background" d="M560-600q-17 0-28.5-11.5T520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560ZM160-440q-17 0-28.5-11.5T120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160Zm400 320q-17 0-28.5-11.5T520-160v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560Zm-400 0q-17 0-28.5-11.5T120-160v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160Z"/>
            </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboards</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a data-bs-toggle="" href="{{ route('download.index')}}" class="nav-link {{ Route::is('download.index') ? 'active' : ''}}" aria-controls="pagesExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed" >
                <title>Download</title>
                <path class="color-background" d="M260-160q-91 0-155.5-63T40-377q0-78 47-139t123-78q23-81 85.5-136T440-797v323l-36-35q-11-11-27.5-11T348-508q-11 11-11 28t11 28l104 104q12 12 28 12t28-12l104-104q11-11 11.5-27.5T612-508q-11-11-27.5-11.5T556-509l-36 35v-323q103 14 171.5 92.5T760-520q69 8 114.5 59.5T920-340q0 75-52.5 127.5T740-160H260Z"/>
            </svg>
            </div>
            <span class="nav-link-text ms-1">Download</span>
          </a>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="" href="{{ route('extphone.index')}}" class="nav-link {{ Route::is('extphone.index') ? 'active' : ''}} " aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                <title>Ext. Phone</title>
                <path class="color-background" d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z"/>
            </svg>
            </div>
            <span class="nav-link-text ms-1">Ext. Phone</span>
          </a>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link {{ Route::is('program.booking_meeting') || Route::is('program.budget') || Route::is('program.employee_self_service') || Route::is('program.request_magang') || Route::is('program.mailblast') || Route::is('program.e_audit') || Route::is('program.e_leave') || Route::is('program.e_travel') ? 'active' : ''}}" aria-controls="ecommerceExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                <title>My Program</title>
                <path class="color-background" d="M400-200q-17 0-28.5-11.5T360-240q0-17 11.5-28.5T400-280h400q17 0 28.5 11.5T840-240q0 17-11.5 28.5T800-200H400Zm0-240q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h400q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H400Zm0-240q-17 0-28.5-11.5T360-720q0-17 11.5-28.5T400-760h400q17 0 28.5 11.5T840-720q0 17-11.5 28.5T800-680H400ZM200-160q-33 0-56.5-23.5T120-240q0-33 23.5-56.5T200-320q33 0 56.5 23.5T280-240q0 33-23.5 56.5T200-160Zm0-240q-33 0-56.5-23.5T120-480q0-33 23.5-56.5T200-560q33 0 56.5 23.5T280-480q0 33-23.5 56.5T200-400Zm0-240q-33 0-56.5-23.5T120-720q0-33 23.5-56.5T200-800q33 0 56.5 23.5T280-720q0 33-23.5 56.5T200-640Z"/>
            </svg>
            </div>
            <span class="nav-link-text ms-1">My program</span>
          </a>
          <div class="collapse {{ Route::is('program.booking_meeting') || Route::is('program.budget') || Route::is('program.employee_self_service') || Route::is('program.mailblast') || Route::is('program.request_magang') || Route::is('program.e_audit') || Route::is('program.e_leave') || Route::is('program.e_travel') ? 'show' : ''}}" id="ecommerceExamples">
            <ul class="nav ps-3 pt-2">
              <li class="nav-item ">
                <a class="nav-link {{ Route::is('program.booking_meeting')  ? 'active' : ''}}" href="{{ route('program.booking_meeting')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <path class="color-background" d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v640q0 33-23.5 56.5T720-80H240Zm200-720v245q0 12 9.5 17.5t20.5-.5l49-29q10-6 20.5-6t20.5 6l49 29q11 6 21 .5t10-17.5v-245H440Z"/>
                    </svg>
                  </div>
                  <span class="sidenav-normal">Booking meeting<b class="caret"></b></span>
                </a>
              </li>
              <li class="nav-item  pt-1">
                <a class="nav-link {{ Route::is('program.budget') ? 'active' : ''}} " href="{{ route('program.budget')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <title>Budget</title>
                        <path class="color-background" d="M481-120q-17 0-28.5-11.5T441-160v-46q-45-10-79-35t-55-70q-7-14-.5-29.5T330-363q14-6 29 .5t23 21.5q17 30 43 45.5t64 15.5q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-44q0-17 11.5-28.5T481-840q17 0 28.5 11.5T521-800v44q38 6 66 24.5t46 45.5q9 13 3.5 29T614-634q-14 6-29 .5T557-653q-13-14-30.5-21.5T483-682q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v44q0 17-11.5 28.5T481-120Z"/>
                    </svg>
                  </div>
                  <span class="sidenav-normal">Budget<b class="caret"></b></span>
                </a>
              </li>
              <li class="nav-item pt-1">
                <a class="nav-link  {{ Route::is('program.employee_self_service') ? 'active' : ''}}" href="{{ route('program.employee_self_service')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <title>Employee Self Service</title>
                      <path class="color-background" d="M200-120q-33 0-56.5-23.5T120-200v-600q0-17 11.5-28.5T160-840q17 0 28.5 11.5T200-800v600h600q17 0 28.5 11.5T840-160q0 17-11.5 28.5T800-120H200Zm80-120q-17 0-28.5-11.5T240-280v-280q0-17 11.5-28.5T280-600h80q17 0 28.5 11.5T400-560v280q0 17-11.5 28.5T360-240h-80Zm200 0q-17 0-28.5-11.5T440-280v-480q0-17 11.5-28.5T480-800h80q17 0 28.5 11.5T600-760v480q0 17-11.5 28.5T560-240h-80Zm200 0q-17 0-28.5-11.5T640-280v-120q0-17 11.5-28.5T680-440h80q17 0 28.5 11.5T800-400v120q0 17-11.5 28.5T760-240h-80Z"/>
                  </svg>
                  </div>
                  <span class="sidenav-normal">Employee Self Service<b class="caret"></b></span>
                </a>
              </li>
              <li class="nav-item pt-1">
                <a class="nav-link {{ Route::is('program.mailblast') ? 'active' : ''}}" href="{{ route('program.mailblast')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <title>Mailblast</title>
                      <path class="color-background" d="M176-183q-20 8-38-3.5T120-220v-180l320-80-320-80v-180q0-22 18-33.5t38-3.5l616 260q25 11 25 37t-25 37L176-183Z"/>
                  </svg>
                  </div>
                  <span class="sidenav-normal">Mailblast<b class="caret"></b></span>
                </a>
              </li>
              <li class="nav-item pt-1">
                <a class="nav-link {{ Route::is('program.request_magang') ? 'active' : ''}}" href="{{ route('program.request_magang')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <title>request Magang</title>
                      <path class="color-background" d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm198 322q11-18 16.5-38.5T720-240v-40q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v40q0 33-23.5 56.5T720-160h-22Zm102-360h-40q-17 0-28.5-11.5T720-560q0-17 11.5-28.5T760-600h40v-40q0-17 11.5-28.5T840-680q17 0 28.5 11.5T880-640v40h40q17 0 28.5 11.5T960-560q0 17-11.5 28.5T920-520h-40v40q0 17-11.5 28.5T840-440q-17 0-28.5-11.5T800-480v-40Zm-480 40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-240v-32q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v32q0 33-23.5 56.5T560-160H80q-33 0-56.5-23.5T0-240Z"/>
                  </svg>
                  </div>
                  <span class="sidenav-normal">Request Magang<b class="caret"></b></span>
                </a>
              </li>
              <li class="nav-item pt-1">
                <a class="nav-link {{ Route::is('program.e_audit') ? 'active' : ''}}" href="{{ route('program.e_audit')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <title>e-Audit</title>
                      <path class="color-background" d="M168-121q-21 5-36.5-10.5T121-168l35-170 182 182-170 35Zm235-84L205-403l413-413q23-23 57-23t57 23l84 84q23 23 23 57t-23 57L403-205Z"/>
                  </svg>
                  </div>
                  <span class="sidenav-normal">e-Audit<b class="caret"></b></span>
                </a>
              </li>
              <li class="nav-item pt-1">
                <a class="nav-link {{ Route::is('program.e_leave') ? 'active' : ''}}" href="{{ route('program.e_leave')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <title>e-Leave</title>
                      <path class="color-background" d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v187q0 17-11.5 28.5T800-493q-17 0-28.5-11.5T760-533v-27H200v400h232q17 0 28.5 11.5T472-120q0 17-11.5 28.5T432-80H200Zm520 40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40Zm20-208v-92q0-8-6-14t-14-6q-8 0-14 6t-6 14v91q0 8 3 15.5t9 13.5l61 61q6 6 14 6t14-6q6-6 6-14t-6-14l-61-61Z"/>
                  </svg>
                  </div>
                  <span class="sidenav-normal">e-Leave<b class="caret"></b></span>
                </a>
              </li>
              <li class="nav-item pt-1">
                <a class="nav-link {{Route::is('program.e_travel') ? 'active' : ''}}" href="{{ route('program.e_travel')}}">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3a416f">
                      <title>e-Travel</title>
                      <path class="color-background" d="M480-120 377-91q-14 4-25.5-4.5T340-118q0-12 3-19.5t8-11.5l69-51v-220l-291 86q-19 5-34-6t-15-31q0-15 5-25t14-15l321-189v-220q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v220l321 189q9 5 14 15t5 25q0 20-15 31t-34 6l-291-86v220l69 51q5 4 8 11.5t3 19.5q0 14-11.5 22.5T583-91l-103-29Z"/>
                  </svg>
                  </div>
                  <span class="sidenav-normal">e-Travel<b class="caret"></b></span>
                </a>
              </li>
              
              
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </aside>

 