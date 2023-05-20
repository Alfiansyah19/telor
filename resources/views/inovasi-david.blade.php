@extends('layouts.tampinovasi')

@section('judul')
    DAVID
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
                  <li>DAVID</li>
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
                        <img src="{{asset('images/david/DAVID.jpg')}}" alt="">
                      </div>
      
                      <div class="swiper-slide">
                        <img src="{{asset('tema/img/portfolio/portfolio-2.jpg')}}" alt="">
                      </div>
                      
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: DAVID (Data Covid - 19)</li>
                      <li><strong>Project date</strong>:2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi Lawak.pdf')}}">DAVID (Data Covid - 19)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">DAVID</h2>
                    <p style="text-align: center">
                      DATA COVID - 19
                    </p>
                    <p style="text-align: justify">
                      DAVID (DATA COVID) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      Tujuan umum dibuatnya Inovasi DAVID (Data Covid ) pada pelayanan pencatatan data covid di Kecamatan Rumbai Kota Pekanbaru yaitu untuk mengurangi kesalahan pendataan secara manual, meningkatkan efisiensi dan efektifitas dalam pengolahan data pelayanan dan pembuatan data covid secara elektronik. Adapun tujuan khusus dari pembuatan sistem aplikasi Data covid ini yaitu dengan adanya Data Covid di Kecamatan Rumbai Kota Pekanbaru untuk meningkatkan efisiensi dan efektifitas dalam pengolahan data pada pelayanan dan Menyajikan data pelayanan dalam bentuk aplikasi sehingga akan membantu pemeriksaan data covid menjadi lebih mudah untuk melihat data data covid.
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection