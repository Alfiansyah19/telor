@extends('layouts.tamplate')

@section('judul')
Non-Perizinan
@endsection

@section('breadcrumbs')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pelayanan Details</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/izin')}}">Perizinan</a></li>
                <li>Non-Perizinan</li>
            </ol>
        </div>
    </div>
</section><!-- Breadcrumbs Section -->
@endsection

@section('sotk')
<section id="team" class="team">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Pelayanan Non-Perizinan</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        </head>
        <body>
            <table cellpadding="10" style="width: 100%; border: 2px solid; " data-aos="fade-in" data-aos-delay="100">
                <tr>
                    <th style="text-align: center; border: 2px solid; ">No</th>
                    <th style="text-align: center; border: 2px solid; ">Jenis Pelayanan</th>
                    <th style="text-align: center; border: 2px solid; ">Persaratan</th>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">1.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan Dispensasi Surat Nikah</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Fotocopy KTP dan KK Calon Mempelai</li>
                        <li style="list-style-type: decimal;">Surat Pengantar Nikah dari Kelurahan Setempat Kedua Mempelai</li>
                        <li style="list-style-type: decimal;">Surat Keterangan dari KUA (Kantor Urusan Agama) dimana akan dilaksanakan pernikahan</li>
                        <li style="list-style-type: decimal;">Permohonan</li>
                        <li style="list-style-type: decimal;">Pas Photo 3 x 4 berwarna masing - masing 2 lembar</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">2.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan Legalisir Dokumen Surat Tanah</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Domkumen yang Asli</li>
                        <li style="list-style-type: decimal;">Fotocopy Dokumen</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">3.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan Akte Kelahiran</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Surat Pengantar RT diketahui RW dan Lurah</li>
                        <li style="list-style-type: decimal;">Kartu Keluarga (KK) yang Asli dan Fotocopy</li>
                        <li style="list-style-type: decimal;">Kartu Tanda Penduduk (KTP) yang Asli kedua Orang Tua dan Fotocopy</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP 2 (dua) orang saksi yang masih berlaku</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Kelurahan F.2-01</li>
                        <li style="list-style-type: decimal;">Fotocopy Surat Nikah/Akta Perkawinan</li>
                        <li style="list-style-type: decimal;">Surat Keterangan dari Rumah Sakit atau </li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">4.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan KIP/SKD WNI/WNA</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Surat Pengantar RT diketahui RW dan Lurah</li>
                        <li style="list-style-type: decimal;">Surat Keterangan Pindah/Datang WNI asli dari daerah asal</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Kelurahan F.1-54</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Kelurahan F.1-55</li>
                        <li style="list-style-type: decimal;">Surat Keterangan Datang dari Luar Negri yang diterbitkan oleh instansi Pelaksana bagi WNA</li>
                        <li style="list-style-type: decimal;">Fotocopy Surat Nikah atau Akta Perkawinan</li>
                        <li style="list-style-type: decimal;">Fotocopy Akta Kelahiran Anak atau Ijazah/Surat Keterangan Lahir Anak</li>
                        <li style="list-style-type: decimal;">Pas Photo berwarna ukuran 3 x 4 sebanyak 4 (empat) lembar</li>
                        <li style="list-style-type: decimal;">SK Pindah dari atasan dan Surat Keterangan Mendapatkan (SKM) KK dari Dinas Kependudukan dan Pencatatan Sipil bagi PNS, TNI, POLRI, Mahasiswa, dan BUMN/BUMD</li>
                        <li style="list-style-type: decimal;">Bagi orang asing (Izin Tinggal Tetap) melampirkan photo copy paspor, Surat Keterangan Catatan Kepolisian (SKCK) dan Surat Nikah/Akta Kawin</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">5.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan SKPD WNI Dalam Kota (Antar Kec./Kel.)</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Surat Pengantar RT diketahui RW dan Lurah</li>
                        <li style="list-style-type: decimal;">Kartu Keluarga (KK) yang Asli</li>
                        <li style="list-style-type: decimal;">Kartu Tanda Penduduk (KTP) yang Asli</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Kelurahan F.1-54 (Dalam Satu Kecamatan)</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Kecamatan F.1-55 (Antar Kecamatan)</li>
                        <li style="list-style-type: decimal;">Pas Photo berwarna ukuran 3 x 4 sebanyak 4 (empat) lembar</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">6.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan Kartu Keluarga (KK)</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;"> Permohonan KK Baru
                        <li style="list-style-type: decimal;">Lokasi Usaha berada pada jalan kelas III/jalan lokal dan pada jalan kelas IV/jalan lingkungan</li>
                        <li style="list-style-type: decimal;">Surat Permohonan materai 6000</li>
                        <li style="list-style-type: decimal;">Mengisi Formulir Perizinan</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">7.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan KTP Elektronik</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <dl>Permohonan KK Baru
                            <li style="list-style-type: decimal;">Surat Pindah Asli dari daerah asal</li>
                            <li style="list-style-type: decimal;">Surat Pengantar daru Kelurahan (formulir F 1.06 untuk KK)</li>
                            <li style="list-style-type: decimal;">Fotocopy KTP</li>
                            <li style="list-style-type: decimal;">Surat Pernyataan tidak keberatan dari tetangga diketahui Lurah</li>
                        </dl>
                        <dl>Permohonan KK karena penambahan anggota keluarga
                            <li style="list-style-type: decimal;">Sirat Pengantar dari Kelurahan(Formulir F 1.06 untuk KK)</li>
                            <li style="list-style-type: decimal;">Formulir penambahan anggota keluarga (F 1.03):
                                <br>
                                <ol>
                                    <li> KK Asli</li>
                                    <li> Fotocopy Akte Kelahiran</li>
                                </ol>
                            </li>
                            <dl>Permohonan KK karena hilang
                                <li style="list-style-type: decimal;">Surat Pengantar daru Kelurahan (formulir F 1.06 untuk KK)</li>
                                <li style="list-style-type: decimal;">Fotocopy Kartu Keluarga (KK)</li>
                                <li style="list-style-type: decimal;">Surat Keterangan Hilang dari Kelurahan</li>
                                <li style="list-style-type: decimal;">Surat Keterangan Hilang dari Kepolisian</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">8.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Izin Riset/Penelitian</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Surat Rekomendasi dari KESBANGPOL</li>
                        <li style="list-style-type: decimal;">Kartu Mahasiswa NM</li>
                        <li style="list-style-type: decimal;">Fotocopy Kartu Tanda Penduduk (KTP)</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">9.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan SKGR, SKH, SKT</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Permohonan</li>
                        <li style="list-style-type: decimal;">Surat Dasar (Pemiluk 1)</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP Penjual, Pembeli dan Sempadan</li>
                        <li style="list-style-type: decimal;">Surat Keterangan Ahli Waris dan Surat Kuasa Ahli Waris bila Pemilik Tanah telah meninggal dunia dan ditandatangani oleh seluruh Ahli Waris</li>
                        <li style="list-style-type: decimal;">Berita Acara Peninjauan Lokasi / Pengukuran Ulang Lokasi Tanah</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">10.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan Surt Keterangan (Domisili/Tidak Mampu)</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Surat Pengantar RT diketahui RW dan Lurah</li>
                        <li style="list-style-type: decimal;">Surat Keterangan dari Lurah setempat</li>
                        <li style="list-style-type: decimal;">Kartu Keluarga (KK) yang Asli</li>
                        <li style="list-style-type: decimal;">Kartu Tanda Penduduk (KTP) yang Asli</li>
                        <li style="list-style-type: decimal;">Permohonan dari yang bersangkuran</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">11.</td>
                    <td style="text-align: center; border: 2px solid; ">Permohonan Pembuatan Keterangan Ahli Waris</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Surat Pernyataan Kematian yang diketahui RT/RW</li>
                        <li style="list-style-type: decimal;">Fotocopy Kartu Keluarga (KK) / Kartu Tanda Penduduk (KTP) para Ahli Waris</li>
                        <li style="list-style-type: decimal;">Surat Kuasa Ahli Waris diketahui RT/RW</li>
                        <li style="list-style-type: decimal;">Surat Pernyataan Ahli Waris yang diketahui RT/RW, Lurah dan 2 (dua) orang saksi</li>
                        <li style="list-style-type: decimal;">Surat Nikah Almarhum</li>
                        <li style="list-style-type: decimal;">Akte Kelahiran para Ahli Waris</li>
                    </td>
                </tr>
            </table>
        </body>
        </html>


    </div>
</section>
@endsection
