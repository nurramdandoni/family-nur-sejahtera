<?php 
include("header.php"); 

if(isset($_POST['tombol_tambah'])){
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $topik = $_POST['subject'];
  $pesan = $_POST['message'];
  $add_status = $lib->tambah_data_pesan($nama, $email, $topik,$pesan);
  if($add_status){
  header('Location: index.php');
  }
}

?>

  <main id="main">

    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Profile</h2>
              <h3>"Berkontribusi Memajukan Pelaku Usaha Mikro Kecil dan Menengah (UMKM) dalam hal Manajemen Data Usaha"</h3>
              <p>Data merupakan Aset penting dalam sebuah Usaha.</p>
              <p>Family Nur Sejahtera adalah Commanditer Venoscrap (CV) bergerak di Bidang IT dan Pertanian, dimana kami menyediakan Platform bagi pelaku UMKM dan Petani dalam pengelolaan produk mereka. Visi Kami adalah meningkatnya perekonomian masyarakat dan menyediakan informasi - informasi yang relevan pada bidang- bidang yang dimaksud. <br><br>Kenapa Produk Kami?</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i>Biaya Terjangkau.</li>
                <li><i class="ion-android-checkmark-circle"></i>Pengelolaan Data Akurat.</li>
                <li><i class="ion-android-checkmark-circle"></i>Informasi - informasi Up to Date!.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>


    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Produk</h3>
          <p>Produk kami untuk kelancaran Bisnis Anda!.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-bookmarks-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Ritel Master</a></h4>
              <p class="description">Platform untuk Bisnis Ritel sangat cocok untuk Pemilik Kios/ Warung dalam memudahkan proses Transaksi, Dokumentasi Bisnis, dan Laporan Bisnis.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-analytics-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Aku Petani</a></h4>
              <p class="description">Platform untuk Petani untuk mendapatkan Pembeli Kontinue, Harga dan Peluang Usaha Pertanian.</p>
            </div>
          </div>


        </div>

      </div>
    </section>

    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimoni</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Pemilik Kios &amp; Ritel</h4>
                <p>
                  Ritel Master Tebukti meningkatkan Proses Transaksi saya 4x lebih cepat dari Sebelumnya.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Petani Porang</h4>
                <p>
                  Aku Petani membuat saya tidak sulit mendapatkan Harga dan Pembeli terbaik.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Penjual Kue</h4>
                <p>
                  Ritel Master memudahkan saya Analisa bisnis saya Realtime, Luar Biasa!.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Pemilik Warung Sembako</h4>
                <p>
                  Ritel Master memudahkan saya cek Stok dan Pengelolaan Keuangan Saya!.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section>


    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Tim Kami</h3>
          <p>Kami didukung Oleh Tim Profesinal, Kompeten pada Bidangnya dan Berpengalaman!</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Harga</h3>
          <p>Anda Hanya membayar sesuai Peningkatan Bisnis Anda!</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">Rp.</span>42rb<span class="period">/Bulan</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Pemula
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">3000 Transaksi/ Hari</li>
                  <li class="list-group-item">1500 Etalase Produk</li>
                  <li class="list-group-item">Tersedia Transaksi Jual Pulsa</li>
                  <li class="list-group-item">24/7 Dukungan Kami!</li>
                </ul>
                <a href="#" class="btn">Pilih</a>
              </div>
            </div>
          </div>
      
          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">Rp.</span>86rb<span class="period">/Bulan</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Medium
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">8000 Transaksi/ Hari</li>
                  <li class="list-group-item">4000 Etalase Produk</li>
                  <li class="list-group-item">Tersedia Transaksi Jual Pulsa dan Token PLN</li>
                  <li class="list-group-item">Tersedia Transaksi Bayar PLN dan Air</li>
                  <li class="list-group-item">24/7 Dukungan Kami!</li>
                </ul>
                <a href="#" class="btn">Pilih</a>
              </div>
            </div>
          </div>
      
          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">Rp.</span>120rb<span class="period">/Bulan</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Profesional
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Tidak ada Batasan Transaksi/ Hari</li>
                  <li class="list-group-item">Tidak ada Batasan jumlah Produk</li>
                  <li class="list-group-item">Tersedia Semua Fitur paket Medium</li>
                  <li class="list-group-item">24/7 Dukungan Kami!</li>
                </ul>
                <a href="#" class="btn">Pilih</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section>

 

<?php include('footer.php'); ?>