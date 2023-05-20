@extends('layouts.tampkelurahan')

@section('judul')
PALAS
@endsection
@section('peta')

<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Palas</h2>
            <p>Kelurahan Palas adalah Terbentuk tahun 2004 dengan kode wilayah 14.71.061009. Topoligi Kelurahan Palas yaitu Peternakan dan Perkebunan. Kelurahan Palas merupakan salah satu Kelurahan dari 6 Kelurahan yang berada di Kecamatan Rumbai, Kota Pekanbaru, Provinsi Riau, Indonesia. Kelurahan Palas ini mempunyai Luasnya adalah 13,898km2 dengan penduduk sebesar 8.810 Jiwa.</p>
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
                        Visi : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit turpis cursus in hac habitasse.
                    </p>
                    <p style="text-align: justify">
                        Misi : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit turpis cursus in hac habitasse.
                    </p>
                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <a href="https://www.google.co.id/maps/dir//Kantor+Lurah+Palas+Kecamatan+Rumbai,+Jalan+Damai,+Palas,+Kota+Pekanbaru,+Riau/@0.5714897,101.3442872,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x31d5ab1c7e9d97b9:0xede97f15fb9b8be9!2m2!1d101.3855395!2d0.571408"><i class='bx bx-current-location'></i></a>
                            <h4>Alamat</h4>
                            <p>Jl. Damai, Palas, Kec. Rumbai, Kota Pekanbaru, Riau 28265</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class='bx bx-phone-call'></i>
                            <h4>Telepon</h4>
                            <p></p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class='bx bx-envelope'></i>
                            <h4>Email</h4>
                            <p></p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <a href=""><i class='bx bxl-instagram'></i></a>
                            <h4>Instagram</h4>
                            <p>Kelurahan Palas</p>
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
                    <h3 style="text-align: center;">PETA KELURAHAN PALAS</h3>
                </div>
            </div>
        </div>
        <div id="peta" class="embed-container">
            <br>
            <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Map Kelurahan Palas" src="//kecamatanrumbai.maps.arcgis.com/apps/Embed/index.html?webmap=38983056d86f4eb9959b38395dd009d7&extent=101.2988,0.5386,101.4256,0.6128&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe>
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
                    <span data-purecounter-start="0" data-purecounter-end="8800" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah Jiwa</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-card-text"></i>
                    <span data-purecounter-start="0" data-purecounter-end="7275" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah KK</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah RT</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
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
                            <td style="text-align: center; border: 2px solid;">M. Rizky Pramdani, SSTP
                            </td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19910304 201206 1 001
                            </td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/b)</td>
                            <td style="text-align: center; border: 2px solid;">Lurah</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">2.</td>
                            <td style="text-align: center; border: 2px solid;"> Andi Saputra, S.Sos
                            </td>
                            <td style="text-align: center; border: 2px solid;"> NIP. 19800414 200701 1 003
                            </td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/b)</td>
                            <td style="text-align: center; border: 2px solid;">Sekretaris Lurah</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">3.</td>
                            <td style="text-align: center; border: 2px solid;"> Kasmijo, S.AP
                            </td>
                            <td style="text-align: center; border: 2px solid;"> NIP. 19781207 200701 1 004
                            </td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/b)</td>
                            <td style="text-align: center; border: 2px solid;">Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">4.</td>
                            <td style="text-align: center; border: 2px solid;"> Khairul
                            </td>
                            <td style="text-align: center; border: 2px solid;"> NIP. 19670102 198603 1 003
                            </td>
                            <td style="text-align: center; border: 2px solid;">Pengatur Tk. I (II/d)
                            </td>
                            <td style="text-align: center; border: 2px solid;"> Pengadministrasi Umum </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
