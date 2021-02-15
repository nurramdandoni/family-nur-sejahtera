<?php 
include('aksi.php');
$lib = new Aksi();
session_start();


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
          <li class="active"><a href="index.php">Beranda</a></li>
          <?php if(!isset($_SESSION['login'])){ ?>
                
                <?php }else{ ?>
                    <li><a href="home.php">Produk</a></li>
              <?php } ?>
          <li><a href="#footer">Kontak</a></li>
          <li class="drop-down"><a href="">Akun</a>
            <ul>
              <?php if(!isset($_SESSION['login'])){ ?>
                <li><a href="masuk.php">Masuk</a></li>
                <?php }else{ ?>
                    <li><a href="keluar.php">Keluar</a></li>
              <?php } ?>
              <li><a href="daftar.php">Daftar</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      
    </div>
  </header>
 