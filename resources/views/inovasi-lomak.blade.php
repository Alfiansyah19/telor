@extends('layouts.tampinovasi')

@section('judul')
    LOMAK
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
                  <li>LOMAK</li>
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
                        <img src="{{asset('images/lomak/lomak.jpg')}}" alt="">
                      </div>
      
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
      
                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Inovasi information</h3>
                    <ul>
                      <li><strong>Inovasi</strong>: LOMAK (Layanan Oke Masyarakat Keliling)</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi LOMAK.pdf')}}">LOMAK (Layanan Oke Masyarakat Keliling)</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">LOMAK</h2>
                    <p style="text-align: center">
                      LAYANAN OKE MASYARAKAT KELILING
                    </p>
                    <p style="text-align: justify">
                      LOMAK (LAYANAN OKE MASYARAKAT KELILING) merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2019.
                    </p>
                    <p style="text-align: justify">
                      Tujuan Inovasi LOMAK (LAYANAN OKE MASYARAKAT KELILING) adalah memberikan kemudahan, keterjangkauan dan kenyamanan kepada masyarakat dalam mendapatkan pelayanan. Selain itu, inovasi ini juga bertujuan mewujudkan pelayanan kepada masyarakat secara profesional, transparan, efektif dan efisien serta menciptakan pelayanan pemerintah yang mudah diakses masyarakat.
                    </p>
                    <p style="text-align: justify">
                      Sedangkan manfaat LOMAK (Layanan Oke Masyarakat Keliling) dinilai membawa kemudahan dan menghemat waktu bagi masyarakat yang mengurus lebih dari satu pelayanan, karena berada dalam satu lokasi. Diharapkan agar LOMAK dapat terus ditingkatkan baik pelayanan maupun fasilitasnya, sehingga masyarakat merasa semakin nyaman dan dimudahkan.
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection