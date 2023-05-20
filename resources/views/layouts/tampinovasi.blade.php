<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inovasi - @yield('judul')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('images/rumbai.ico')}}" rel="icon">
  <link href="{{asset('images/rumbai.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="{{url('/')}}"><img src="{{asset('images/pemko.png')}}" alt="" class="img-fluid"><span> Kecamatan Rumbai</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Perencanaan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/renstra')}}">Renstra</a></li>
              <li><a href="{{url('/sotk')}}">SOTK</a></li>
              <li><a href="{{url('/renja')}}">Renja</a></li>
              <li><a href="{{url('/perjanjian')}}">Perjanjian Kerja</a></li>
              <li><a href="{{url('/dpa')}}">DPA</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Kelurahan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('/kel-lb')}}">Limbungan Baru</a></li>
              <li><a href="{{url('/kel-mp')}}">Meranti Pandak</a></li>
              <li><a href="{{url('/kel-ld')}}">Lembah Damai</a></li>
              <li><a href="{{url('/kel-sm')}}">Sri Meranti</a></li>
              <li><a href="{{url('/kel-us')}}">Umban Sari</a></li>
              <li><a href="{{url('/kel-pls')}}">Palas</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{url('/inovasi')}}">Inovasi</a></li>
          <li><a class="nav-link scrollto" href="{{url('/portfolio')}}">Galeri</a></li>
          <li><a class="nav-link scrollto" href="{{url('/team')}}">Team</a></li>
          <li><a class="nav-link scrollto" href="{{url('/contact')}}">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    @yield('breadcrumbs')
    @yield('portfolio-details')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kecamatan Rumbai</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{asset('tema/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('tema/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('tema/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('tema/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('tema/js/main.js')}}"></script>

</body>

</html>