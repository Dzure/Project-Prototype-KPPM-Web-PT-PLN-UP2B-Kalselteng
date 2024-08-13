<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT PLN UP2B KALSELTENG</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assetsG/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assetsG/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assetsG/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <div id="loading-overlay" style="background: linear-gradient(135deg, #36d1dc, #5b86e5); position: fixed; width: 100%; height: 100%; top: 0; left: 0; z-index: 9999; display: flex; align-items: center; justify-content: center; opacity: 1; transition: opacity 0.5s ease;">
      <div class="spinner-border text-white" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages" style="background: linear-gradient(135deg, #36d1dc, #5b86e5);">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">PT PLN UP2B KALSELTENG</a></h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/profilup2b">Profil</a></li>
          <li><a class="nav-link scrollto" href="/beritakegiatan">Berita Kegiatan</a></li>
          <li><a class="getstarted scrollto" href="/login">Login Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    
    <section class="inner-page">
      
          @yield('content')
        
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background: linear-gradient(135deg, #36d1dc, #5b86e5);" >

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PT PLN (Persero) UP2B Kalselteng</h3>
            <p>
              Jl. H. Mistar Cokrokusumo<br>
              Guntung Paikat, Kec. Banjarbaru Selatan<br>
              Kota BanjarBaru, Kalimantan Selatan<br>
              Indonesia <br><br>
              <strong>Hubungi Kami</strong> <br>
              <strong>Phone:</strong> (0511) 5913501 <br>
              <strong>Email:</strong> plnup2bkalselteng@gmail.com <br>
            </p>
          </div>

        <div class="col-lg-6 col-md-6 footer-contact">
          <h3>Ikuti Kami</h3>
          <div class="social-icons">
            <a href="https://www.instagram.com/up2bkalselteng/" target="_blank">
              <img src="assets/img/instagram-icon.png" alt="Instagram" style="width: 32px; height: 32px;" />
            </a>
            <a href="https://x.com/up2bkalimantan" target="_blank">
              <img src="assets/img/twitter-icon.png" alt="Twitter" style="width: 50px; height: 50px;" />
            </a>
            <a href="https://www.youtube.com/channel/UCKO-4xU0HPAsUVJN9ppjjAw" target="_blank">
              <img src="assets/img/youtube-icon.png" alt="YouTube" style="width: 41px; height: 41px;" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container footer-bottom clearfix" style="text-align: center;" >
    <div class="copyright">
      &copy; Copyright <strong><span> 2024 PT PLN (Persero) UP2B Kalselteng</span></strong> All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assetsG/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assetsG/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assetsG/js/main.js') }}"></script>

</body>

</html>