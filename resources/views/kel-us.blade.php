@extends('layouts.tampkelurahan')

@section('judul')
UMBAN SARI
@endsection
@section('peta')

<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Umban Sari</h2>
            <p>Kelurahan Umban Sari adalah salah satu kelurahan di Kecamatan Rumbai, Kota Pekanbaru, Provinsi Riau, Indonesia. Kelurahan Umban Sari merupakan salah satu Kelurahan dari 6 Kelurahan yang berada di Kecamatan Rumbai, Kota Pekanbaru, Provinsi Riau, Indonesia.</p>
            <p>Pada tahun 2021, Kelurahan Umban Sari ini mempunyai penduduk sebesar 12.339 Jiwa. Luasnya adalah 9.154km2. Potensi Kelurahan Umban Sari antara lain Wirausahawan dengan banyaknya pelaku usaha, pertenakan seperti kambing, sapi dan ayam. Kelurahan Umban Sari juga memiliki banyak kebun seperti durian, sawit, jagung, coklat, dan pinang, dimana berperan penting bagi mata pencaharian penduduk sekitar</p>
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
                        Visi : Terwujudnya Pelayanan Prima dan Smart.
                    </p>
                    <p style="text-align: justify">
                        Misi : <ol style="text-align: justify">
                            <li>Terwujudnya Kinerja Aparatur Kelurahan Umban Sari Yang Transparan, Efektif, Efisien, Dan Akuntabel.</li>
                            <li>Meningkatkan Sumber Daya Masyarakat Yang Bertaqwa, Mandiri, Tangguh Dan Berdaya Saing Tinggi.</li>
                            <li>Terwujudnya Kelembagaan Masyarakat Yang Sinergis Dan Memiliki Kapabilitas.</li>
                            <li>Terwujudnya Lingkungan Kelurahan Umban Sari Yang Bersih Dan Ramah Lingkungan.</li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <a href="https://www.google.co.id/maps/dir//Kantor+Lurah+Umban+Sari,+Umban+Sari,+Kota+Pekanbaru,+Riau/@0.5757683,101.3768687,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x31d5ab28b780c615:0x5c8dfc2f063ec761!2m2!1d101.418087!2d0.5756326"><i class='bx bx-current-location'></i></a>
                            <h4>Alamat</h4>
                            <p>Jl. Umban Sari Atas, Kec. Rumbai, Kota Pekanbaru, Riau 28266</p>
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
                            <p>Kelurahan Umban Sari</p>
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
                    <h3 style="text-align: center;">PETA KELURAHAN UMBAN SARI</h3>
                </div>
            </div>
        </div>
        <div id="peta" class="embed-container">
            <br>
            <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Map Kelurahan Umban Sari" src="//kecamatanrumbai.maps.arcgis.com/apps/Embed/index.html?webmap=c3d3823884184aeaab0995fee35e56ee&extent=101.3518,0.5428,101.4786,0.6171&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe>
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
                    <span data-purecounter-start="0" data-purecounter-end="12339" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah Jiwa</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-card-text"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3426" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah KK</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="54" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah RT</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1" class="purecounter"></span>
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
                            <td style="text-align: center; border: 2px solid;">Hj. Asparida, S.Sos, M.Si</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19680501 200112 2 004</td>
                            <td style="text-align: center; border: 2px solid;">Penata Tk. I (III/d)</td>
                            <td style="text-align: center; border: 2px solid;">Lurah</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">2.</td>
                            <td style="text-align: center; border: 2px solid;">Cendang, S.Sos</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19680117 200701 1 003</td>
                            <td style="text-align: center; border: 2px solid;">Penata (III/c)</td>
                            <td style="text-align: center; border: 2px solid;">Sekretaris Lurah</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">3.</td>
                            <td style="text-align: center; border: 2px solid;">Yetri Yusni, S.Kom</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19841218 201001 2 016</td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/d)</td>
                            <td style="text-align: center; border: 2px solid;">Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">4.</td>
                            <td style="text-align: center; border: 2px solid;">Melia Defirta, S.Pd
                            </td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19721002 199900 2 002
                            </td>
                            <td style="text-align: center; border: 2px solid;">Pembina IV/a</td>
                            <td style="text-align: center; border: 2px solid;"> Kasi Kesejahteraan Sosial</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">5.</td>
                            <td style="text-align: center; border: 2px solid;">Nina Nelma Yenti, S.Pd
                            </td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19820806 201001 2 011
                            </td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/b)</td>
                            <td style="text-align: center; border: 2px solid;">Kasi Pembangunan dan Pemberdayaan Masyarakat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
