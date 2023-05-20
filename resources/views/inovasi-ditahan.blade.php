@extends('layouts.tampinovasi')

@section('judul')
    DITAHAN
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
                  <li>DITAHAN</li>
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
                        <img src="{{asset('images/ditahan/a.jpg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/ditahan/3.jpg')}}" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="{{asset('images/ditahan/1.png')}}" alt="">
                      </div>
                       
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: DITAHAN (Digitalisasi Pencatatan Pertanahan)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi Ditahan.pdf')}}">DITAHAN (Digitalisasi Pencatatan Pertanahan)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">DITAHAN</h2>
                    <p style="text-align: center">
                      DIGITALISASI PENCATATAN PERTANAHAN
                    </p>
                    <p style="text-align: justify">
                      DITAHAN (DIGITALISASI PENCATATAN PERTANAHAN) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      DITAHAN merupakan aplikasi yang dibuat sebagai sarana pencatatan atau registrasi administrasi pertanahan. Diawali dengan penginputan item-item dalam surat tanah sampai dengan terbitnya nomor surat. Semuanya tersistem dengan baik sehingga meminimalisir kesalahan dalam pencatatan.
                    <p style="text-align: justify">
                      Tujuan dibuatnya aplikasi DITAHAN ini adalah untuk menertibkan administrasi pertanahan, memudahkan pencarian arsip, memverifikasi berkas dengan efisien, menghindari nomor surat yang double, registrasi surat tanah tersusun dan terdata dengan baik. mempermudah membuat laporan bulanan dan tahunan.
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection