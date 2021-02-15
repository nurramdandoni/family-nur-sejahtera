<?php 
include('aksi.php');
$lib = new Aksi();
 
if(isset($_POST['tombol_daftar'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  if($password==$repassword){
      $pwd = sha1($password);
      $add_status = $lib->tambah_data_akun($nama, $email, $pwd);
      if($add_status){
         echo "<script>alert('Pendaftaran Berhasil!');</script>";
        }
    }else{
        echo "<script>alert('Password Tidak Cocok!');</script>";
    }
    // header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Family Nur Sejahtera #Official</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Family Nur Sejahtera</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Beranda</a></li>
          <li><a href="#footer">Kontak</a></li>
          <li class="drop-down"><a href="">Akun</a>
            <ul>
              <li><a href="masuk.php">Masuk</a></li>
              <li><a href="daftar.php">Daftar</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      
    </div>
  </header>

  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Daftar</h2>
          <form action="" method="POST" role="form">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap"  required/>
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" id="email" placeholder="Email"  required/>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password"  required/>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Ulangi Password"  required/>
                </div>
                <div>
                    <input type="submit" class="btn-get-started scrollto" name="tombol_daftar" value="Daftar"/>
                </div>
              </form>
          
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <?php include('footer.php'); ?>