
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

</html> 
