@extends('layouts.tamplate')

@section('judul')
Perizinan
@endsection

@section('breadcrumbs')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pelayanan Details</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/non-perizinan')}}">Non-Perizinan</a></li>
                <li>Perizinan</li>
            </ol>
        </div>
    </div>
</section><!-- Breadcrumbs Section -->
@endsection

@section('sotk')
<section id="team" class="team">
    <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Pelayanan Perizinan</h2>
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
                    <td style="text-align: center; border: 2px solid; ">Izin Tempat Usaha Jual Beli HP dan Aksesorisnya</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Lokasi Usaha berada pada jalan kelas III/jalan lokal dan pada jalan kelas IV/jalan lingkungan</li>
                        <li style="list-style-type: decimal;">Surat Permohonan materai 6000</li>
                        <li style="list-style-type: decimal;">Mengisi Formulir Perizinan</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP</li>
                        <li style="list-style-type: decimal;">Surat Pernyataan tidak keberatan dari tetangga diketahui Lurah</li>
                        <li style="list-style-type: decimal;">Fotocopy Surat Tanah</li>
                        <li style="list-style-type: decimal;">Surat Perjanjian Sewa/Kontrak bila bukan milik pribadi</li>
                        <li style="list-style-type: decimal;">Tanda Lunas PBB dua tahun terakhir</li>
                        <li style="list-style-type: decimal;">Surat Pengantar RT dan RW</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Lurah</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">2.</td>
                    <td style="text-align: center; border: 2px solid; ">Izin Pembuatan Tegel, Paving Block, Genteng (Kelas Jalan III/IV)</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Lokasi Usaha berada pada jalan kelas III/jalan lokal dan pada jalan kelas IV/jalan lingkungan</li>
                        <li style="list-style-type: decimal;">Blangko Perizinan</li>
                        <li style="list-style-type: decimal;">Fotocopy Kartu Keluarga</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP</li>
                        <li style="list-style-type: decimal;">Surat Pernyataan tidak keberatan dari tetangga diketahui Lurah</li>
                        <li style="list-style-type: decimal;">Fotocopy Surat Tanah</li>
                        <li style="list-style-type: decimal;">Surat Perjanjian Sewa/Kontrak bila bukan milik pribadi</li>
                        <li style="list-style-type: decimal;">Tanda Lunas PBB dua tahun terakhir</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Lurah</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">3.</td>
                    <td style="text-align: center; border: 2px solid; ">Izin Industri Kerajinan Ruma Tangga</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Blangko Perizinan</li>
                        <li style="list-style-type: decimal;">Fotocopy Kartu Keluarga</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP</li>
                        <li style="list-style-type: decimal;">Surat Pernyataan tidak keberatan dari tetangga diketahui Lurah</li>
                        <li style="list-style-type: decimal;">Fotocopy Surat Tanah</li>
                        <li style="list-style-type: decimal;">Surat Perjanjian Sewa/Kontrak bila bukan milik pribadi</li>
                        <li style="list-style-type: decimal;">Tanda Lunas PBB dua tahun terakhir</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Lurah</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">4.</td>
                    <td style="text-align: center; border: 2px solid; ">Izin Pembuatan Tempe</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Blangko Perizinan</li>
                        <li style="list-style-type: decimal;">Fotocopy Kartu Keluarga</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP</li>
                        <li style="list-style-type: decimal;">Surat Pernyataan tidak keberatan dari tetangga diketahui Lurah</li>
                        <li style="list-style-type: decimal;">Fotocopy Surat Tanah</li>
                        <li style="list-style-type: decimal;">Surat Perjanjian Sewa/Kontrak bila bukan milik pribadi</li>
                        <li style="list-style-type: decimal;">Tanda Lunas PBB dua tahun terakhir</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Lurah</li>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; border: 2px solid; ">5.</td>
                    <td style="text-align: center; border: 2px solid; ">Izin Cuci Kendaraan Roda Dua dan Roda Tiga</td>
                    <td style="text-align: center; border: 2px solid; text-align: justify;">
                        <li style="list-style-type: decimal;">Blangko Perizinan</li>
                        <li style="list-style-type: decimal;">Fotocopy Kartu Keluarga</li>
                        <li style="list-style-type: decimal;">Fotocopy KTP</li>
                        <li style="list-style-type: decimal;">Surat Pernyataan tidak keberatan dari tetangga diketahui Lurah</li>
                        <li style="list-style-type: decimal;">Fotocopy Surat Tanah</li>
                        <li style="list-style-type: decimal;">Surat Perjanjian Sewa/Kontrak bila bukan milik pribadi</li>
                        <li style="list-style-type: decimal;">Tanda Lunas PBB dua tahun terakhir</li>
                        <li style="list-style-type: decimal;">Surat Pengantar dari Lurah</li>
                    </td>
                </tr>
            </table>
        </body>
        </html>

    </div>
</section>
@endsection
