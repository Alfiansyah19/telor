<?php
$channelId = 'UCnU-jf4LhHKlSF7EZWwfBtg';
// $channelId = 'UC-lHJZR3Gqxm24_Vd_AJ5Yw';
function get_CURL($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=' . $channelId . '&key=AIzaSyBFnhJmCMTzWPqM-WLcDDWz40toHnixyYU');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBFnhJmCMTzWPqM-WLcDDWz40toHnixyYU&channelId=UCnU-jf4LhHKlSF7EZWwfBtg&maxResult=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];
?>

@extends('layouts.tamplate')

@section('judul')
Home
@endsection

@section('hero')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
        <a href="index.html"><a href="index.html"><img src="{{ asset('images/test.png') }}" alt="" class="img-fluid"></a>
            <!-- <h1>Rumbai Keren </h1>
<h2>We are team of talented designers making websites with Bootstrap</h2> -->
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
</section><!-- End Hero -->
@endsection

@section('about')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                <div class="content">
                    <h3>KECAMATAN RUMBAI</h3>
                    <p style="text-align: justify">
                        Kecamatan Rumbai dibentuk berdasarkan Perda Nomor 2 Tahun 2020 tentang Penataan Kecamatan.
                    </p>
                    <p style="text-align: justify">
                        Kecamatan Rumbai merupakan salah satu kecamatan di wilayah Kota Pekanbaru, terdiri atas 78 RW
                        dan 336
                        RT. Luas wilayah Kecamatan Rumbai adalah 54.671 km<sup>2</sup> dengan luas masing-masing
                        kelurahan sebagai berikut :
                    </p>
                    <a href="#peta" class="about-btn">Peta Kecamatan <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <a href="https://www.google.co.id/maps/dir//HF42%2BX63+Kantor+Camat+Rumbai,+Jl.+Pelabuhan,+Meranti+Pandak,+Kec.+Rumbai,+Kota+Pekanbaru,+Riau+28266/@0.5573837,101.4499185,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x31d5ac912e5ab54f:0x60bc829ab8be6fee!2m2!1d101.4505691!2d0.5573839"><i class='bx bx-current-location'></i></a>
                            <h4>Alamat</h4>
                            <p>Jl. Pelabuhan, Meranti Pandak, Kec. Rumbai, Kota Pekanbaru, Riau 28266</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class='bx bx-phone-call'></i>
                            <h4>Telepon</h4>
                            <p>0812-7649-4835</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class='bx bx-envelope'></i>
                            <h4>Email</h4>
                            <p>kecamatanrumbai2021@gmail.com</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <a href="https://www.instagram.com/kecamatan_rumbai/?hl=id"><i class='bx bxl-instagram'></i></a>
                            <h4>Instagram</h4>
                            <p>Kecamatan Rumbai</p>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>
        <!-- ======= Data Peta Arcgis ======= -->
        <style>
            .embed-container {
                position: relative;
                padding-bottom: 80%;
                height: 0;
                max-width: 100%;
                box-shadow: 0 10px 100px rgba(0, 0, 0, 0.28);
            }

            .embed-container iframe,
            .embed-container object,
            .embed-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            small {
                position: absolute;
                z-index: 40;
                bottom: 0;
                margin-bottom: -15px;
            }

        </style>
        <div class="row no-gutters">
            <div class="content align-items-stretch" data-aos="fade-up">
                <div class="content">
                    <h3 style="text-align: center;">PETA KECAMATAN RUMBAI</h3>
                </div>
            </div>
        </div>
        <div id="peta" class="embed-container">
            <br>
            <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Map" src="//kecamatanrumbai.maps.arcgis.com/apps/Embed/index.html?webmap=a891e7291d954d2aa6816827949fe098&extent=101.2642,0.5106,101.5177,0.6512&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&basemap_gallery=true&disable_scroll=true&theme=light">
            </iframe>
        </div>
</section><!-- End About Section -->
@endsection

@section('counts')
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts  section-bg">
    <div class="container">

        <div class="row no-gutters d-flex justify-content-center">

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="44" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah ASN</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="78" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah RW</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="336" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah RT</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="88021" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah Jiwa</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="22567" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah KK</strong></p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Counts Section -->
@endsection

@section('services')
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Pelayanan</h2>
            <p>Berdasarkan Pasal 1 ayat (1) Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik, pelayanan publik adalah kegiatan yang dilakukan untuk memenuhi kebutuhan pelayanan, sesuai peraturan yang berlaku.</p>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <a href="{{ url('/izin') }}">
                    <div class="icon-box" data-aos="fade-up">
                        <center>
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <br>
                            <h4 class="title"><a href="{{ url('/izin') }}">Bidang Perizinan</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi</p>
                        </center>
                    </div>
                </a>
            </div>



            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <a href="{{ url('/non-perizinan') }}">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <center>
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <br>
                            <h4 class="title"><a href="{{ url('/non-perizinan') }}">Bidang Non - Perizinan</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore</p>
                        </center>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section><!-- End Services Section -->
@endsection



@section('cta')
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3>Youtube</h3>
        </div>
        <div class="row justify-content-center" data-aos="zoom-in">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="col-md-4">
                        <img src="<?= $youtubeProfilePic ?>" width="100" class="rounded-circle img-thumbnail">
                    </div>
                    <br>
                    <h3><?= $channelName ?></h3>
                    <div class="g-ytsubscribe" data-channelid="UCnU-jf4LhHKlSF7EZWwfBtg" data-layout="default" data-count="default"></div>
                </div>
            </div>

            <div class="row mt-3 pb-3">
                <div class="col">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId ?>?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Cta Section -->
@endsection
