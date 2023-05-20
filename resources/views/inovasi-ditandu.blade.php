@extends('layouts.tampinovasi')

@section('judul')
    DITANDU
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
                  <li>DITANDU</li>
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
                        <img src="{{asset('images/ditandu/DITANDU.jpg')}}" alt="">
                      </div>
                      
                      <div class="swiper-slide">
                        <img src="{{asset('images/ditandu/12.png')}}" alt="">
                      </div>
                      
                      <div class="swiper-slide">
                        <img src="{{asset('images/ditandu/3.png')}}" alt="">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: DITANDU (Digitalisasi Pencatatan Pengaduan)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi DITANDU.pdf')}}">DITANDU (Digitalisasi Pencatatan Pengaduan)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">DITANDU</h2>
                    <p style="text-align: center">
                        DIGITALISASI PENGADUAN MASYARAKAT RUMBAI
                    </p>
                    <p style="text-align: justify">
                      DITANDU (DIGITALISASI PENCATATAN PENGADUAN) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                      Inovasi DITANDU (Digitalisasi Pencatatan Pengaduan). DITANDU (Digitalisasi Pencatatan Pengaduan) merupakan aplikasi yang memudahkan Kecamatan Rumbai dalam pencatatan pengaduan masyarakat di Kecamatan Rumbai. Perubahan Sistem Pencatatan Laporan Pengaduan Masyarakat, awalnya berupa sistem manual berdasarkan pencatatan buku pengaduan dan sekarang menggunakan sistem aplikasi, dimana masyarakat dapat berkomunikasi langsung dengan fitur Laporan Pengadauan Masyarakat yang terdapat pada website Kecamatan Rumbai, Whatsapp Kecamatan Rumbai, Instagram, Facebook, Surat, dan Langsung datang ke Kantor Kecamatan Rumbai untuk mengkonfirmasikan kendala masyarakat di Kawasan Kecamatan Rumbai dan pengaduan yang sudah masuk dapat langsung di data ke dalam aplikasi agar data dapat terstruktur jumlah pengaduan yang masuk, diposes, dan selesai diprose.. Untuk input pengaduan masyarakat kita memerlukan data, Nama yang bersangkutan, alamat yang bersangkutan, melalui media sosial apa masyarakata mengadu, dan pesan yang di sampaikan.
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection