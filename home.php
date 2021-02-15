<?php 
    include("headerHome.php"); 
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}

$pengguna = $lib->tampil_data_pengguna();
 
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
      <div style="margin-top:200px;">
      <header class="section-header">
          <h3>List Produk</h3>
        </header>
        <div>
            <a href="tambah.php" style="color:#f3f4f5;background:#1bb1dc;border-color:#FFFFF;border-radius:6px;margin:10px;padding:10px;">+ Tambah Produk</a>
        </div>
        <table class="table table-bordered" style="margin:10px;">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jenis Paket</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $no = 1;
                 foreach($pengguna as $data){ ?>
                <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $data['nama_produk']; ?></td>
                <td><?php echo $data['jenis_paket']; ?></td>
                <td><?php echo $data['harga_produk']; ?></td>
                <td><a href="#">Edit</a>||<a href="hapus.php?id=<?php echo $data['idPR']; ?>">Hapus</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
      </div>

    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Produk</h3>
          <p>Produk kami untuk kelancaran Bisnis Anda!.</p>
        </header>

        <div class="row">

          <?php
                $no = 1;
                 foreach($pengguna as $data){ ?>
               <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                    <div class="icon" style="background: #fff0da;"><i class="ion-ios-analytics-outline" style="color: #e98e06;"></i></div>
                    <h4 class="title"><a href=""><?php echo $data['nama_produk']; ?></a></h4>
                    <p class="description"><?php echo $data['keterangan_produk']; ?></p>
                    </div>
                </div>
                <?php } ?>


        </div>

      </div>
    </section>


 

<?php include('footer.php'); ?>