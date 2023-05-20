@extends('layouts.tampinovasi')

@section('judul')
    POINTMAS
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
                  <li>POINT MAS</li>
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
                        <img src="{{asset('images/pointmas/a.png')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{asset('images/pointmas/1.jpg')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: POINT MAS (Pojok Internet Masyarakat)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi Point Mas.pdf')}}">POINT MAS (Pojok Internet Masyarakat)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">POINT MAS</h2>
                    <p style="text-align: center">
                      POJOK INTERNET MASYARAKAT
                    </p>
                    <p style="text-align: justify">
                      POINT MAS (POJOK INTERNET MASYARAKAT) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      POINT MAS merupakan sarana yang diberikan kepada masyarakat dalam bentuk penyediaan sarana internet di lingkungan kantor camat rumbai. Diberikan tempat khusus bagi masyarakat yang ingin memanfaatkan fasilitas internet gratis yang dibuat di pojok kantor Camat Rumbai. Masyarakat bisa memanfaatkan fasilitas internet yang ada di Kecamatan terutama untuk mempermudah akses pelayanan di Kecamatan maupun di UPTD CAPIL
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection