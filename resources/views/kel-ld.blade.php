@extends('layouts.tampkelurahan')

@section('judul')
LEMBAH DAMAI
@endsection

@section('peta')
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Lembah Damai</h2>
            <p>Kelurahan Lembah Damai memiliki luas 13,05 kilometer persegi, atau 8,29 persen dari luas Kecamatan Rumbai Pesisir.Dataran Kelurahan Lembah Damai berada di ketinggian 16,0 meter di atas permukaan laut. Di Kelurahan Lembah Damai terdapat sebanyak 34 RT dan 9 RW, dengan jumlah rumah tangga 2.415 Kepala Keluarga (KK). Adapun jumlah penduduk Kelurahan Lembah Damai sebanyak 7.859 jiwa.</p>
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
                            <a href="https://www.google.co.id/maps/dir//Kantor+Lurah+Lembah+Damai,+Jl.+Suka+Indah,+Lembah+Damai,+Kota+Pekanbaru,+Riau/@0.5758812,101.4038228,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x31d5aca4aba2cab3:0x4fa07fdd6ab52a4!2m2!1d101.4450225!2d0.5757955"><i class='bx bx-current-location'></i></a>
                            <h4>Alamat</h4>
                            <p>Jl. Suka Indah, Lembah Damai, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28266</p>
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
                            <p>Kelurahan Lembah Damai</p>
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
                    <h3 style="text-align: center;">PETA KELURAHAN LEMBAH DAMAI</h3>
                </div>
            </div>
        </div>
        <div id="peta" class="embed-container">
            <br>
            <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Map Kelurahan Lembah Damai" src="//kecamatanrumbai.maps.arcgis.com/apps/Embed/index.html?webmap=288e58bf47584e079d541ac3be09d098&extent=101.3761,0.5586,101.5028,0.6328&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe>
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
                    <span data-purecounter-start="0" data-purecounter-end="7859" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah Jiwa</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-card-text"></i>
                    <span data-purecounter-start="0" data-purecounter-end="2415" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah KK</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Jumlah RT</strong></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
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
                            <td style="text-align: center; border: 2px solid;">Andi Abdillah, S.STP, M.Si</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19930711 201507 1 003</td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/b)</td>
                            <td style="text-align: center; border: 2px solid;">Lurah</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">2.</td>
                            <td style="text-align: center; border: 2px solid;">Hasdewita, M.Pd</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19681220 200501 2 006</td>
                            <td style="text-align: center; border: 2px solid;">Penata (III/c)</td>
                            <td style="text-align: center; border: 2px solid;">Kasi Kesejahteraan Sosial</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">3.</td>
                            <td style="text-align: center; border: 2px solid;">Yuskal Zamsuri, S.Pd</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19691108 199403 1 004</td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk.I (III/d)</td>
                            <td style="text-align: center; border: 2px solid;">Kasi Pembangunan dan Pemberdayaan Masyarakat</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">4.</td>
                            <td style="text-align: center; border: 2px solid;">Hamdan, S.AP</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19800420 201001 1 011</td>
                            <td style="text-align: center; border: 2px solid;">Penata Muda Tk. I (III/b)</td>
                            <td style="text-align: center; border: 2px solid;">Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; border: 2px solid;">5.</td>
                            <td style="text-align: center; border: 2px solid;">Samirah</td>
                            <td style="text-align: center; border: 2px solid;">NIP. 19700808 199009 2 001</td>
                            <td style="text-align: center; border: 2px solid;">Juru Tk. I (I/d)</td>
                            <td style="text-align: center; border: 2px solid;">Pelaksana</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
