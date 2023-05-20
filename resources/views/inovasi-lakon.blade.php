@extends('layouts.tampinovasi')

@section('judul')
    LAKON
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
                  <li>LAKON</li>
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
                        <img src="{{asset('images/lakon/a.jpeg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/lakon/a.jpg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/lakon/22.jpg')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: LAKON (Layanan Konseling Online) </li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi LAKON.pdf')}}">LAKON (Layanan Konseling Online)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">LAKON</h2>
                    <p style="text-align: center">
                      LAYANAN KONSELING ONLINE
                    </p>
                    <p style="text-align: justify">
                      LAKON (LAYANAN KONSELING ONLINE) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      LAKON merupakan layanan konseling tatap muka virtual yang dikelola oleh Forum Anak Rumbai yang diselenggarakan melalui Google Meet dengan Metode tutor sebaya. Tujuan LAKON adalah untuk meningkatkan kemampuan dan partisipasi anak dalam proses perencanaan pembanunan, sebagaimana diamanatkan dalam Undang Undang Dasar 1945 amandemen IV Pasal 28B Ayat (2) setiap anak berhak atas kelangsungan hidup, tumbuh dan berkembang serta berhak atas perlindungan dari kekerasan dan diskriminasi
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection