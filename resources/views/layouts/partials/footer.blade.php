@php 
use App\Models\Footer;

$userCompanyId = auth()->user()->company_id;
$footers = Footer::where('company_id', $userCompanyId)->first();

@endphp

{{-- <footer class="footer pt-3 bg-gradient-primary mt-4">
    <div class="container">
        <div class="row align-items-center py-4 d-flex flex-column flex-sm-row justify-content-center pt-5 pt-md-4 px-4 px-xl-5">
            <div class="col-md-8 d-flex align-items-center">
                <img src="../../assets/img/logo_antvgo_blank.png" alt="Company Logo" class="me-3" width="100"
                    height="100">
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
            <div class="col-md-1 d-none d-md-flex justify-content-center">
                <div class="vr h-100 text-white"></div>
            </div>
            <div class="col-md-3 d-flex flex-wrap justify-content-start justify-content-sm-center">
                <div class="col-12 col-sm-4">
                    <a href="#" class="text-decoration-none mb-2  text-white d-flex">
                        <i class="fab fa-facebook-f"></i>
                        <div></div>
                    </a>
                    <a href="#" class="text-decoration-none mb-2 text-white d-flex">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-decoration-none mb-2 text-white d-flex">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center align-items-center py-2 mt-2  text-center">
            <p class="mb-0 text-white">&copy; 2024 Company, Inc</p>
        </div>
    </div>
</footer> --}}
<footer class="footer pt-3 bg-gradient-primary mt-2">
  <div class="container">
      <div class="row align-items-center py-4 d-flex flex-column flex-sm-row justify-content-center justify-content-md-start pt-3 pt-md-4 px-md-5 px-0"> 
  
          <div class="col-12 col-md-8 d-flex align-items-center flex-wrap justify-content-center justify-content-md-start">
              <img src="../../assets/img/logo_antvgo_blank.png" alt="Company Logo" class="me-3" width="100" height="100">
              <div class="text-white">
                  <h5 class="mb-1 text-white">{{ $footers->name }}</h5>
                  <p class="mb-0">
                    {!! $footers->address !!}
                  </p>
              </div>
          </div>

          {{-- <div class="col-md-1 d-none d-md-flex justify-content-center">
              <div class="vr h-100 text-white"></div>
          </div> --}}
  
          {{-- <div class="col-md-3 d-flex flex-wrap justify-content-start justify-content-sm-center">
              <div class="d-flex flex-column align-items-center">
                  <a href="#" class="text-decoration-none mb-2 text-white d-flex align-items-center">
                      <i class="fab fa-facebook-f me-2"></i> Facebook
                  </a>
                  <a href="#" class="text-decoration-none mb-2 text-white d-flex align-items-center">
                      <i class="fab fa-twitter me-2"></i> Twitter
                  </a>
                  <a href="#" class="text-decoration-none mb-2 text-white d-flex align-items-center">
                      <i class="fab fa-instagram me-2"></i> Instagram
                  </a>
              </div>
          </div> --}}
          {{-- <div class="col-12 col-sm-4 col-md-3"> --}}
              <div class="col-12 col-md-4 d-flex flex-wrap justify-content-center   align-items-center mt-4">
                
                <a  class="d-flex mb-3 justify-content-center me-3" target="_blank" href="">
                  <div class="col-1 me-1 text-white">
                    <i class="fas fa-phone"></i>
                  </div>
                  <div class="text-white ms-2">{{ $footers->phone }}</div>
                </a>
                <a  class="d-flex mb-3 justify-content-center me-3" target="_blank" href="">
                  <div class="col-1 me-1 text-white">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="text-white ms-2">{{ $footers->email }}</div>
                </a>
                <a  class="d-flex mb-3 justify-content-center me-3" target="_blank" href="">
                  <div class="col-1  me-1 text-white">
                    <i class="fab fa-twitter"></i>
                  </div>
                  <div class="text-white ms-2">@vivatofficials</div>
                </a>
                <a  class="d-flex mb-3 justify-content-center me-3" target="_blank" href="">
                  <div class="col-1  me-1 text-white">
                    <i class="fab fa-tiktok"></i>
                  </div>
                  <div class="text-white ms-2">@vivatofficials</div>
                </a>
                <a  class="d-flex mb-3 justify-content-center me-3" target="_blank" href="">
                  <div class="col-1  me-1 text-white">
                    <i class="fab fa-youtube"></i>
                  </div>
                  <div class="text-white ms-2">@vivatofficials</div>
                </a>
                <a  class="d-flex mb-3 justify-content-center me-3" target="_blank" href="">
                  <div class="col-1  me-1 text-white">
                    <i class="fab fa-instagram"></i>
                  </div>
                  <div class="text-white ms-2">@vivatofficials</div>
                </a>

              </div>
          {{-- </div> --}}
      </div>
  
      <div class="d-flex flex-wrap justify-content-center align-items-center py-2 mt-2 text-center">
          <p class="mb-0 text-white">&copy; 2024 Company, Inc</p>
      </div>
  </div>
</footer>
