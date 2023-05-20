@extends('layouts.tampinovasi')

@section('judul')
    GESER SERU
@endsection

@section('breadcrumbs')
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
      
              <div class="d-flex justify-content-between align-items-center">
                <h2>Inovasi Details</h2>
                <ol>
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/inovasi')}}">Inovasi</a></li>
                  <li>GESER SERU</li>
                </ol>
              </div>
      </div>
    </section><!-- Breadcrumbs Section -->
@endsection

@section('portfolio-details')
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
      
              <div class="row gy-4">
      
                <div class="col-lg-8">
                  <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
      
                      <div class="swiper-slide">
                        <img src="{{asset('images/geserseru/1.jpeg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/geserseru/a.jpg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/geserseru/c.jpg')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: GESER SERU (Gerakan Seribu Se-Rumbai)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi Geser Seru.pdf')}}">GESER SERU (Gerakan Seribu Se-Rumbai)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">GESER SERU</h2>
                    <p style="text-align: center">
                      GERAKAN SERIBU SE-RUMBAI
                    </p>
                    <p style="text-align: justify">
                      GESER SERU (GERAKAN SERIBU SE RUMBAI) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      GESER SERU merupakan inovasi yang bertujuan membantu meringankan beban hidup masyarakat yang berkekurangan dan membiasakan diri untuk berbagi kepada sesama. Tujuan GESER SERU adalah meningkatkan kepedulian sosial dan rasa kebersamaan antara ASN, Instansi Pemerintah, swasta dan warga masyarakat Rumbai, meringankan beban masyarakat yang kurang mampu, meningkatkan rasa syukur kepada Allah SWT atas rezeki yang telah diberikan.
                    </p>
                    <p style="text-align: justify">
                      Masyarakat yang menerima bantuan akan dicari dulu oleh lurah yang bekerjasama dengan babinsa, babinkantibmas, lpmk, rt rw dan kader pkk untuk menentukan siapa yang berhak menerima. bantuan yang diberikan dalam bentuk paket sembako dan dilaksanakan pada hari Jum'at. inovasi ini merupakan wadah penyaluran bantuan bagi masyarakat yang membutuhkan demi terwujudnya kesejahteraan mayarakat
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection