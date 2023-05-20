@extends('layouts.tampinovasi')

@section('judul')
    BIBIR
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
                  <li>BIBIR</li>
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
                        <img src="{{asset('images/bibir/BIBIR.jpg')}}" alt="">
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
                      <li><strong>Inovasi</strong>: BIBIR (Bincang - Bincang Rumbai)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi BIBIR.pdf')}}">BIBIR (Bincang - Bincang Rumbai)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">BIBIR</h2>
                    <p style="text-align: center">
                      BINCANG - BINCANG RUMBAI
                    </p>
                    <p style="text-align: justify">
                      BIBIR (BINCANG BINCANG RUMBAI) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      BIBIR merupakan ruang diskusi, edukasi, pemberian informasi kepada seluruh masyarakat terkait segala hal yang terjadi di wilayah Kecamatan Rumbai sehingga terjalin komunikasi yang baik antar stake holder, membuka ruang diskusi terkait persoalan-persoalan yang terjadi di wilayah kecamatan rumbai dan bersama sama mencari solusi terbaik demi kemajuan rumbai.
                    </p>
                    <p style="text-align: justify">
                      Pada kegiatan BIBIR (Bincang Bincang Rumbai) ini, Camat Rumbai berperan sebagai Keynote Speakaer, sebagai Moderator adalah Mahasiswa yang tergabung dalam HIMARUSA (Himpunan Mahasiswa Rumbai Bersatu) dan yang menjadi Narasumber ditentukan dari Tema yang akan dibahas. Bisa dari Akademisi, Eksekutif, Legislatif, Dunia usaha, Tokoh Masyarakat, Pemuda, Organisasi Kemasyarakatan, dsb. Inovasi ini diselenggarakan dengan menggunakan ZOOM
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection