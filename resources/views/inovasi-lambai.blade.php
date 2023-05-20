@extends('layouts.tampinovasi')

@section('judul')
    LAMBAI
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
                  <li>LAMBAI</li>
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
                        <img src="{{asset('images/lambai/LAMBAI.jpg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/lambai/a.png')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/lambai/b.png')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/lambai/c.jpg')}}" alt="">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: LAMBAI (Layanan Pengaduan Masyarakat Rumabi)</li>
                      <li><strong>Project date</strong>: 01 March, 2020</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi LAMBAI.pdf')}}">LAMBAI (Layanan Pengaduan Masyarakat Rumabi)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">LAMBAI</h2>
                    <p style="text-align: center">
                        LAYANAN PENGADUAN MASYARAKAT RUMBAI
                    </p>
                    <p style="text-align: justify">
                      Pengaduan adalah saran atau keluhan yang disampaikan oleh masyarakat. Dengan adanya pengaduan, kantor Kecamatan Rumbai dapat meningkatkan kinerjanya, dapat menindak lanjuti keluhan masyarakat di Kawasan Kecamatan Rumbai dan selama ini menerima pengaduan secara langsung. Hal tersebut dinilai tidak efisien karena membutuhkan waktu lama untuk menyampaikan pengaduan masyarakat kepada petugas. Berdasarkan dari permasalahan tersebut, dibuatlah Website Layanan Pengaduan Masyarakat Rumbai, dengan adanya system infomasi ini, proses pengaduan masyarakat dapat dilakukan dengan cepat dan dapat langsung diproses pihak Kecamatan Rumbai. Sistem Informasi ini juga dapat terhubung dengan Whatsapp untuk melakukan pengaduan masyarakat.Website Kecamatan Rumbai merupakan salah satu strategi didalam melaksanakan pengembangan e-government secara sistematik melalui tahapan yang realistik dan terukur. Pembuatan website Kecamatan Rumbai memiliki tujuan agar masyarakat daerah tersebut dapat dengan mudah mendapat akses fitur Layanan Pengaduan Masyarakat Rumbai (LAMBAI) kepada pihak Kecamatan Rumbai
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection