@extends('layouts.tampinovasi')

@section('judul')
    Website Kecamatan Rumbai
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
                  <li>Website Kecamatan Rumbai</li>
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
                        <img src="{{asset('images/web/WEBSITE.jpg')}}" alt="">
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
                      <li><strong>Inovasi</strong>: Website Kecamatan Rumbai</li>
                      <li><strong>Project date</strong>: 2021</li>
                      <li><strong>Laporan inovasi</strong>: <a href="{{asset('pdf inovasi/Laporan Inovasi Website.pdf')}}">Website Kecamatan Rumbai</a></li>
                    </ul>
                  </div>
                </div>
                <div class="portfolio-description">
                    <h2 style="text-align: center">WEBSITE KECAMATAN RUMBAI</h2>
                    <p style="text-align: justify">
                        Website Kecamatan Rumbai merupakan Inovasi Kecamatan Rumbai yang dibuat pada 2021.
                    </p>
                    <p style="text-align: justify">
                        Website Kecamatan merupakan salah satu strategi didalam pengembangan e- government secara sistematik melalui tahapan yang realistik dan terukur. Pembuatan website kecamatan memiliki tujuan agar masyarakat daerah tersebut dapat dengan mudah mendapat akses kepada kecamatannya. Website resmi kecamatan, apabila dikelola dengan baik pada akhirnya akan menghasilkan keuntungan. Keuntungan yang diperoleh adalah berbentuknya citra positif kecamatan sehingga mampu menumbuhkan kepercayaan dimata masyarakat dan pada akhirnya mampu menumbuhkan kesadaran masyarakat untuk berpartisipasi aktif dalam membangun dan memajukan daerahnya
                    </p>
                  </div>
              </div>
      
            </div>
          </section><!-- End Portfolio Details Section -->
@endsection