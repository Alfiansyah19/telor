@extends('layouts.tampinovasi')

@section('judul')
    UNDI
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
                  <li>UNDI</li>
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
                        <img src="{{asset('images/undi/UNDI.jpg')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{asset('images/undi/zz.png')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{asset('images/undi/a.jpg')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{asset('images/undi/x.png')}}" alt="">
                      </div>
                      
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: UNDI (Undangan Digital)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi UNDI.pdf')}}">UNDI (Undangan Digital)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">UNDI</h2>
                    <p style="text-align: center">
                        UNDANGAN DIGITAL
                    </p>
                    <p style="text-align: justify">
                      UNDI (UNDANGAN DIGITAL) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      UNDI (Undangan Digital) merupakan aplikasi yang memudahkan Kecamatan dalam pencatatan Undangan Digital dan registrasi Undangan Digital di Kecamatan Rumbai.
                    </p>
                    <p style="text-align: justify">
                      Perubahan Sistem Registrasi Penomoran Undangan Digital, awalnya berupa sistem manual berdasarkan pencatatan buku registrasi manual dan sekarang menggunakan sistem aplikasi, dimana pelayanan menerima perintah untuk membuat undangan, kemudian undangan tersebut di buat di aplikasi dan sudah terdata menjadi undangan Digital. Dan undangan di tanda tangani oleh Camat Kecamtan Rumbai dengan tanda tangan elektronik.
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection