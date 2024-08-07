@section('styles')
<style>
.footer-vr {
    height: auto; /* Sesuaikan tinggi vertikal sesuai dengan konten */
    align-self: stretch; /* Membuat garis vertikal mengikuti tinggi dari kolom kiri */
  }
</style>
@endsection

<footer class="footer pt-3 bg-gradient-primary mt-4">
  
{{-- <div class="container">

    <div class="row align-items-center py-4 ">
      <div class="col-md-8 d-flex align-items-center">
          <img src="../../assets/img/logo_antvgo_blank.png" alt="Company Logo" class="me-3" width="60" height="60"">
          <div class="text-white">
              <h5 class="mb-0 text-white">PT VIVA Teknologi Integra</h5>
              <p class="mb-0">The Convergence, lantai 6, Kawasan Rasuna Epicentrum 
                <br>
                Jl. H.R. Rasuna Said, Karet Kuningan,
                <br>
                Setiabudi Jakarta 12940, Indonesia
              </p>
          </div>
      </div>
      <div class="col-md-1 text-center d-none d-md-block">
          <div class="vr text-white"></div>
      </div>
      
      <div class="col-md-3 d-flex justify-content-center justify-content-md-end mt-4 mt-md-0">
          <a href="#" class="text-decoration-none me-3 text-white">
              <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-decoration-none me-3 text-white">
              <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-decoration-none me-3 text-white">
              <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="text-decoration-none text-white">
              <i class="fab fa-linkedin-in"></i>
          </a>
      </div>
  </div>
</div> --}}
<div class="container">
  <div class="row align-items-center py-4 d-flex flex-column flex-sm-row justify-content-center pt-5 pt-md-4 px-4 px-xl-5">
    <!-- Kiri: Logo, Nama Perusahaan, dan Alamat -->
    <div class="col-md-8 d-flex align-items-center">
      <img src="../../assets/img/logo_antvgo_blank.png" alt="Company Logo" class="me-3" width="100" height="100">
      <div class="text-white">
        <h5 class="mb-1 text-white">PT VIVA Teknologi Integra</h5>
        <p class="mb-0">
          The Convergence, lantai 6, Kawasan Rasuna Epicentrum
          <br>
          Jl. H.R. Rasuna Said, Karet Kuningan,
          <br>
          Setiabudi Jakarta 12940, Indonesia
        </p>
      </div>
    </div>
    
    <!-- Garis Vertikal -->
    <div class="col-md-1 d-none d-md-flex justify-content-center">
      <div class="vr h-100 text-white"></div>
    </div>
    
    <!-- Kanan: Ikon Media Sosial -->
    
    <div class="col-md-3 d-flex flex-wrap justify-content-start justify-content-sm-center">
      <a href="#" class="text-decoration-none me-3 text-white d-flex">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="text-decoration-none me-3 text-white d-flex">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="text-decoration-none me-3 text-white d-flex">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="text-decoration-none text-white d-flex">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
  </div>
</div>


<div class="d-flex flex-wrap justify-content-center align-items-center py-3 mt-2 border-top text-center">
  <p class="mb-0 text-white">&copy; 2024 Company, Inc</p>
</div>

</div>
    {{-- <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made by
          </div>
        </div>
      </div>
    </div> --}}
  </footer>

