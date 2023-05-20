@extends('layouts.tamplate')
@section('judul')
    Kontak
@endsection
@section('contact')
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Kontak</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>
      
              <div class="row">
                <div class="col-lg-6">
                  <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Lokasi</h3>
                    <p>Jl. Sembilang Ujung No.2, Kelurahan Meranti Pandak
                      Kecamatan Rumbai,Kota Pekanbaru, Riau</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Alamat Email</h3>
                    <p>kecamatanrumbai2021@gmail.com</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Kontak Pelayanan</h3>
                    <p>0812-7649-4835</p>
                  </div>
                </div>
      
              </div>
      
              <div class="row">
      
                <div class="col-lg-6 ">
                  <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d814.8396081868783!2d101.45123530894945!3d0.5578523167888144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ac912e5ab54f%3A0x60bc829ab8be6fee!2sKantor%20Kecamatan%20Rumbai!5e0!3m2!1sen!2sid!4v1665976144768!5m2!1sen!2sid" frameborder="0" style="border-radius: 5px; border:0; width: 100%; height: 430px; box-shadow: 0 1px 6px rgba(32, 33, 36, .28);" allowfullscreen></iframe>
                </div>
      
                <div class="col-lg-6">
                  <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                    <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <form name="submit-to-google-sheet" action="{{url('forms/contact.php')}}" method="post" role="form" class="php-email-form">
                    <div class="section-title">
                      <h5>LAPORAN PENGADUAN MASYARAKAT RUMBAI</h4>
                       </div>
                      <div class=" form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" style="border-radius: 5px;  box-shadow: 0 1px 6px rgba(32, 33, 36, .28);;font-size: 14px;">
                      </div>
                      <div class=" form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" style="border-radius: 5px;  box-shadow: 0 1px 6px rgba(32, 33, 36, .28);;font-size: 14px;">
                      </div>
                    <div class="form-group mt-3">
                      <select class="form-control dropdown-toggle" name="kelurahan" style="border-radius: 5px;  box-shadow: 0 1px 6px rgba(32, 33, 36, .28);;font-size: 14px;">
                        <option selected>Kelurahan</option>
                        <option value="Meranti Pandak">Meranti Pandak</option>
                        <option value="Limbungan Baru">Limbungan Baru</option>
                        <option value="Lembah Damai">Lembah Damai</option>
                        <option value="Palas">Palas</option>
                        <option value="Umban Sari">Umban Sari</option>
                        <option value="Sri Meranti">Sri Meranti</option>                  
                      </select>
                    </div>
                    <div class="form-group mt-3">
                      <!-- <label for="alamat">Alamat</label> -->
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" style="border-radius: 5px;  box-shadow: 0 1px 6px rgba(32, 33, 36, .28);font-size: 14px;">
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="pesan" rows="3" placeholder="Pesan" style="border-radius: 5px;  box-shadow: 0 1px 6px rgba(32, 33, 36, .28);font-size: 14px;"></textarea>
                    </div>
                    <div class="text-center mt-3 btn-kirim"><button type="submit">Kirim Pesan</button>
                      <button class="text-center mt-3 btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                      </button>
                    </div>

                  </form>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Contact Section -->
      
@endsection