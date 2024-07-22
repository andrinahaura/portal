{{-- 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
  <title>
    Soft UI Dashboard PRO by Creative Tim
  </title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
 
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />

  <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.1.1" rel="stylesheet" />

  <style>
    .position-relative {
  position: relative;
}

.position-absolute {
  position: absolute;
}


  </style>
</head>

<body class="bg-gray-100">

  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/curved11.jpg');">
      <span class="mask bg-gradient-primary opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <img class="max-width-200 w-100 position-relative z-index-2" src="../../../assets/img/logo_antvgo_blank.png" alt="chat-img">

            
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Sign in</h5>
            </div>
          
            <div class="card-body">
              <form role="form" class="text-start">
                <div class="mb-3 position-relative">
                  <input type="email" class="form-control pl-5" placeholder="username" aria-label="Email">
                  <i class="fas fa-user position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>

                </div>
                <div class="mb-3 position-relative">
                  <input type="password" class="form-control"  id="password" placeholder="Password" aria-label="Password">
                  <i class="fas fa-eye position-absolute" id="togglePassword" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>

                </div>
           
                <div class="text-center">
                  <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-3">Sign in</button>
                </div>
             
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
 
  <footer class="footer py-5 mt-5">
    <div class="container">
    
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            © <script>
              document.write(new Date().getFullYear())
            </script> made by
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="../../../assets/js/core/popper.min.js"></script>
  <script src="../../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
 
  <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script>
    document.getElementById('togglePassword').addEventListener('click', function (e) {
 
  const password = document.getElementById('password');
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  
  
  this.classList.toggle('fa-eye-slash');
});
  </script>
 
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  
  <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.1.1"></script>
</body>

</html>  --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
    <title>
        Soft UI Dashboard PRO by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.1.1" rel="stylesheet" />


    <style>
        .position-relative {
            position: relative;
        }

        .position-absolute {
            position: absolute;
        }
    </style>
</head>

<body class="">

    <main class="main-content  mt-0">
        <section id="mobile">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('../../../assets/img/curved-images/curved11.jpg');" id="">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            {{-- <h1 class="text-white mb-2 mt-5">Welcome!</h1> --}}
                            <img class="max-width-200 w-100 position-relative z-index-2"
                                src="../../../assets/img/logo_antvgo_blank.png" alt="chat-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <h5>Sign in</h5>
                                <p class="mb-0">Enter your email and password to sign in</p>

                            </div>

                            <div class="card-body">
                                <form role="form" class="text-start">
                                    <div class="mb-3 position-relative">
                                        <input type="email" class="form-control pl-5" placeholder="username"
                                            aria-label="Email">
                                        <i class="fas fa-user position-absolute"
                                            style="top: 50%; right: 11px; transform: translateY(-50%); cursor: pointer;"></i>

                                    </div>
                                    <div class="mb-3 position-relative">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password" aria-label="Password">
                                        <i class="fas fa-eye position-absolute" id="togglePassword"
                                            style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>

                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-3">Sign
                                            in</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="desktop">
            {{-- <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/curved11.jpg');" id="">
        <span class="mask bg-gradient-primary opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <img class="max-width-200 w-100 position-relative z-index-2" src="../../../assets/img/logo_antvgo_blank.png" alt="chat-img">
  
              
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Sign in</h5>
              </div>
            
              <div class="card-body">
                <form role="form" class="text-start">
                  <div class="mb-3 position-relative">
                    <input type="email" class="form-control pl-5" placeholder="username" aria-label="Email">
                    <i class="fas fa-user position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
  
                  </div>
                  <div class="mb-3 position-relative">
                    <input type="password" class="form-control"  id="password" placeholder="Password" aria-label="Password">
                    <i class="fas fa-eye position-absolute" id="togglePassword" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
  
                  </div>
             
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-3">Sign in</button>
                  </div>
               
                </form>
              </div>
            </div>
          </div>
        </div>
  
      </div> --}}
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    {{-- <p class="mb-0">Enter your email and password to sign in</p> --}}
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="mb-3 position-relative">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Email" aria-label="Email">
                                            <i class="fas fa-user position-absolute"
                                                style="top: 50%; right: 11px; transform: translateY(-50%); cursor: pointer;"></i>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <input type="password" id="passworddesktop" class="form-control form-control-lg"
                                                placeholder="Password" aria-label="Password">
                                            <i class="fas fa-eye position-absolute" id="togglePassworddesktop"
                                                style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                                        </div>
                                        <div class="text-center">
                                            <button type="button"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column"
                            id="">
                            <div
                                class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                                <img src="../../../assets/img/shapes/pattern-lines.svg" alt="pattern-lines"
                                    class="position-absolute opacity-4 start-0">
                                <div class="position-relative">
                                    <img class="max-width-400 w-100 position-relative z-index-2"
                                        src="../../../assets/img/logo_antvgo_blank.png" alt="chat-img">
                                </div>
                                {{-- <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
                                <p class="text-white">The more effortless the writing looks, the more effort the writer
                                    actually put into the process.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- <footer class="footer py-5 mt-5">
      <div class="container">
      
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              © <script>
                document.write(new Date().getFullYear())
              </script> made by
            </p>
          </div>
        </div>
      </div>
    </footer> --}}

    <script>
        function handleResize() {
            const desktopDiv = document.getElementById('desktop');
            const mobileDiv = document.getElementById('mobile');
            if (window.matchMedia("(max-width: 992px)").matches) {

                desktopDiv.style.display = 'none';
                mobileDiv.style.display = 'block';
            } else {

                desktopDiv.style.display = 'block';
                mobileDiv.style.display = 'none';
            }
        }
        window.onload = handleResize;
        window.onresize = handleResize;
    </script>


    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Kanban scripts -->
    <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function(e) {

            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);


            this.classList.toggle('fa-eye-slash');
        });
    </script>

<script>
document.getElementById('togglePassworddesktop').addEventListener('click', function(e) {

    const password = document.getElementById('passworddesktop');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);


    this.classList.toggle('fa-eye-slash');
});
</script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.1.1"></script>
</body>

</html>
