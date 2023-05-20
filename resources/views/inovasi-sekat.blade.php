@extends('layouts.tampinovasi')

@section('judul')
    SEKAT
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
                  <li>SEKAT</li>
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
                        <img src="{{asset('images/sekat/SEKAT.jpg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/sekat/2.png')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/sekat/1.png')}}" alt="">
                      </div>                   
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: SEKAT (Survey Masyarakat)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi Sekat.pdf')}}">SEKAT (Survey Masyarakat)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">SEKAT</h2>
                    <h5 style="text-align: center">SURVEY KEPUASAN MASYARAKAT</h5>
                    <p style="text-align: justify">
                      SEKAT (Survey Kepuasan Masyarakat) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      SEKAT merupakan aplikasi yang memudahkan Kecamatan dalam melihat tingkat kepuasan masyarakat terhadap pelayanan yang diberikan oleh Kecamatan Rumbai. Tujuan SEKAT adalah sebagai sarana monitoring dan evaluasi pelayanan kecamatan untuk mengetahui tingkat kepuasan masyarakat terhadap pelayanan yang diberikan oleh kecamatan.
                    </p>
                    <p style="text-align: justify">
                      <p style="text-align: justify">
                        SEKAT merupakan aplikasi yang memudahkan Kecamatan dalam melihat tingkat kepuasan masyarakat terhadap pelayanan yang diberikan oleh Kecamatan Rumbai. Tujuan SEKAT adalah sebagai sarana monitoring dan evaluasi pelayanan kecamatan untuk mengetahui tingkat kepuasan masyarakat terhadap pelayanan yang diberikan oleh kecamatan.
                      </p>
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection