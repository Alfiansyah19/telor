@extends('layouts.tampkelurahan')

@section('judul')
LIMBUNGAN BARU
@endsection

@section('peta')

<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Limbungan Baru</h2>
            <p>Limbungan Baru adalah salah satu kelurahan di Kecamatan Rumbai, Kota Pekanbaru, Provinsi Riau, Indonesia. Limbungan Baru merupakan kelurahan dengan tipologi daerah pada umumnya bermata pencaharian kerajinan,industri kecil, jasa, dan perdagangan. Limbungan Baru memiliki luas wilayah ± 235 Ha dan tingkat perkembangannya Swasembada.</p>
        </div>

    </div>
</section><!-- End Services Section -->
@endsection

@section('about')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                <div class="content">
                    <h3>VISI DAN MISI</h3>
                    <p style="text-align: justify">
                        Visi : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis volutpat est velit egestas dui id ornare.
                    </p>
                    <p style="text-align: justify">
                        Misi : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisis volutpat est velit egestas dui id ornare.
                    </p>
                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <a href="https://www.google.co.id/maps/dir//Kantor+Lurah+Limbungan+Baru,+Jalan+Ampera,+Limbungan+Baru,+Kota+Pekanbaru,+Riau/@0.5632192,101.3923668,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x31d5ab62bef73e89:0xd965519fd01fffdb!2m2!1d101.4335722!2d0.5630565"><i class='bx bx-current-location'></i></a>
                            <h4>Alamat</h4>
                            <p>Jl. Ampera No.15, Limbungan Baru, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28266</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class='bx bx-phone-call'></i>
                            <h4>Telepon</h4>
                            <p>0812-7649-4835</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class='bx bx-envelope'></i>
                            <h4>Email</h4>
                            <p></p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <a href="https://www.instagram.com/barukelurahan/?hl=id"><i class='bx bxl-instagram'></i></a>
                            <h4>Instagram</h4>
                            <p>Kelurahan Limbungan Baru</p>
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
                    <h3 style="text-align: center;">PETA KELURAHAN LIMBUNGAN BARU</h3>
                </div>
            </div>
        </div>
        <div id="peta" class="embed-container">
            <br>
            <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Map Limbungan Baru" src="//kecamatanrumbai.maps.arcgis.com/apps/Embed/index.html?webmap=430b165290eb4a809038f4434d800dc5&extent=101.4238,0.5559,101.4555,0.5744&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe>
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
                    <span data-purecounter-start="0" data-purecounter-end="20695" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah Jiwa</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-card-text"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4154" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah KK</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="78" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah RT</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah RW</strong></p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Counts Section -->
@endsection

@section('sotk')
<section id="team" class="team">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Daftar ASN</h2>

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
            </head>
            <div class="table-responsive">
                <table class="table" cellpadding="10" style="width: 100%; border: 2px solid; " data-aos="fade-in" data-aos-delay="100">
                    <thead>
                        <th style="text-align: center; border: 2px solid; ">NO</th>
                        <th style="text-align: center; border: 2px solid; ">N A M A</th>
                        <th style="text-align: center; border: 2px solid; ">N I P</th>
                        <th style="text-align: center; border: 2px solid; ">GOLONGAN</th>
                        <th style="text-align: center; border: 2px solid; ">JABATAN</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">1.</td>
                            <td style="text-align: center; border: 2px solid;">Dasriati, S.Sos</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19690721 199303 2 002</td>
                            <td style="text-align: center; border: 2px solid;">Penata Tk. I (III/d)</td>
                            <td style="text-align: center; border: 2px solid;">Lurah</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">2.</td>
                            <td style="text-align: center; border: 2px solid;">Zubir</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19641231 198603 1 114</td>
                            <td style="text-align: center; border: 2px solid;">Penata (III/c)</td>
                            <td style="text-align: center; border: 2px solid;">Sekretaris Lurah</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">3.</td>
                            <td style="text-align: center; border: 2px solid;">Zurisman, SKM</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19761127 200604 1 006</td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/b)</td>
                            <td style="text-align: center; border: 2px solid;">Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">4.</td>
                            <td style="text-align: center; border: 2px solid;">Jasnida, SE</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19821129 201001 2 008</td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda (III/a)</td>
                            <td style="text-align: center; border: 2px solid;"> Kasi Kesejahteraan Sosial</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">5.</td>
                            <td style="text-align: center; border: 2px solid;">R i s k a</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19790419 200212 2 005</td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda (III/a)</td>
                            <td style="text-align: center; border: 2px solid;">Pengadministrasi Umum</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
