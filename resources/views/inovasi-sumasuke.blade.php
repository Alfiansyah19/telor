@extends('layouts.tampinovasi')

@section('judul')
    SUMASUKE
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
                  <li>SUMASUKE</li>
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
                        <img src="{{asset('images/sumasuke/SUMASUKE.jpg')}}" alt="">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{asset('images/sumasuke/a.jpg')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: SUMASUKE (Surat Masuk & Surat Keluar)</li>
                      <li><strong>Project date</strong>: 01 March, 2020</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi SUMASUKE.pdf')}}">SUMASUKE (Surat Masuk & Surat Keluar)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">SUMASUKE</h2>
                    <p style="text-align: center">
                        SURAT MASUK & SURAT KELUAR
                    </p>
                    <p style="text-align: justify">
                      SUMASUKE (SURAT MASUK SURAT KELUAR) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      SUMASUKE (SURAT MASUK SURAT KELUAR) merupakan aplikasi yang memudahkan Kecamatan dalam pencatatan atau registrasi Surat Masuk Surat Keluar di Kecamatan Rumbai.
                    </p>
                    <p style="text-align: justify">
                      Perubahan Sistem Registrasi Penomoran Surat Masuk Surat Keluar, awalnya berupa sistem manual berdasarkan pencatatan buku registrasi manual dan sekarang menggunakan sistem aplikasi, dimana pelayanan menerima surat masuk, kemudian pencatatan surat masuk di lakukan di aplikasi, kemudian surat tersebut didisposisikan sesuai Tupoksi (Tugas Pokok dan Fungsi) yang ada di Kecamatan Rumbai, setelah disposisi dilaksanakan kemudian diproses sesuai denga nisi disposisi, jika surat tersebut perlu di tindaklanjuti maka Kasi (Kepala Seksi) dan Kasubbag (Kepala Sub Bagian) segera menindak lanjutinya maka surat keluar diproses
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection