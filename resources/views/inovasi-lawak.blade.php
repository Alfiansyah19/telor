@extends('layouts.tampinovasi')

@section('judul')
    LAWAK
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
                  <li>LAWAK</li>
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
                        <img src="{{asset('images/lawak/a.png')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: LAWAK (Layanan Whatsapp Anak)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi Lawak.pdf')}}">LAWAK (Layanan Whatsapp Anak)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">LAWAK</h2>
                    <p style="text-align: center">
                        LAYANAN WHATSAPP ANAK
                    </p>
                    <p style="text-align: justify">
                      LAWAK (LAYANAN WHATSAPP ANAK) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      LAWAK merupakan easy service yang bisa dijangkau oleh setiap anak dan masyarakat di Kecamatan Rumbai Layanan ini berisikan layanan konseling, edukasi, pengaduan, dan informasi umum anak. Layanan ini dikelola oleh, dari dan untuk anak di Kecamatan Rumbai. Tujuan LAWAK adalah sebagai sarana komunikasi, edukasi, pengaduan dan informasi serta konseling terkait anak di kecamatan rumbai sehingga terjalin komunikasi yang baik antar anak-anak, saling bertukar dan memberikan informasi, menyampaikan aspirasi, berkreasi serta berinovasi dalam membangun generasi yang unggul.
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection