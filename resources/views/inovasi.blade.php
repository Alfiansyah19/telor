@extends('layouts.tamplate')
@section('judul')
Inovasi
@endsection
@section('inovasi')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Inovasi</h2>
            <h4>"Inovasi Butuh Keberanian, Tanpa Inovasi, Mati Sebelum Mati."</h4>
            <p>DR. H. FIRDAUS, ST, MT</p>
        </div>

        <div class="row" data-aos="fade-in">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Digital</li>
                    <li data-filter=".filter-web">Non - Digital</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/1.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/Pm-zwf162_k?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-web')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/2.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/crAmxbmugoU?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-sekat')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/3.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('tema/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-panah')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/4.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/2VO67sb5Zcw?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-ditahan')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/5.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('tema/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-tragis')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/6.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/NRmTpLv4UgU?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-bibir')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/7.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/skdtWKC-PrY?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-lakon')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/8.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/_KYJdnMykHU?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-lawak')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/9.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/Bc2tZyMHOqM?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-sumasuke')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/10.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/fpx8clPMK8Y?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-undi')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/11.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/XAIrZsyxj6E?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-lambai')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/12.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/-vrfLpYtzcc?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-ditandu')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/13.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/S3bfHw-CEFc?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-david')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/14.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/uw5LBhWIt3k?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-ditags')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/15.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{asset('tema/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-sipausdagu')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/16.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/tOPb5o3HmI4?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-pointmas')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/17.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/oarL3Ly1HTA?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-geserseru')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('images/inovasi/18.png')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="https://www.youtube.com/embed/9GI_qDUflsM?controls=0" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class='bx bxl-youtube bx-tada bx-rotate-90'></i></a>
                        <a href="{{url('/inovasi-lomak')}}" title="More Details"><i class='bx bx-link bx-tada'></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->
@endsection
