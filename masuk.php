<?php 
include('aksi.php');
$lib = new Aksi();
 
if(isset($_POST['tombol_masuk'])){
  $email = $_POST['username'];
  $password = $_POST['password'];
      $pwd = sha1($password);
      $add_status = $lib->login($email, $pwd);
      if($add_status>0){
        session_start();
        $_SESSION['login'] = "ys";
         echo "<script>alert('Login Berhasil!');</script>";
         header('Location: home.php');
        }else{
          echo "<script>alert('Login Gagal!');</script>";
      }
    
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
          <h2>Masuk</h2>
          <form action="" method="POST" role="form">
                <div class="form-group">
                  <input type="text" onchange="cek_field();" name="username" class="form-control" id="username" placeholder="Username"  required/>
                </div>
                <div class="form-group">
                  <input type="password" onchange="cek_field();" class="form-control" name="password" id="ps" placeholder="Password"  required/>
                </div>
                <div>
                    <input type="submit" class="btn-get-started scrollto" id="tmbl" name="tombol_masuk" value="Masuk"/>
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
  <script>
    document.getElementById('ps').style.visibility = 'hidden';
    document.getElementById('tmbl').style.visibility = 'hidden';
    function cek_field(){
      var username = document.getElementById('username').value;
      var password = document.getElementById('ps').value;
      if(username!=''){
        document.getElementById('ps').style.visibility = 'visible';
        if(password!=''){
          document.getElementById('tmbl').style.visibility = 'visible';
        }else{
          document.getElementById('tmbl').style.visibility = 'hidden';

        }
      }else{
        document.getElementById('password').style.visibility = 'hidden';
      }
    }
  </script>