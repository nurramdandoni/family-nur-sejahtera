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

if(isset($_POST['tombol_input'])){
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
        $add_status = $lib->tambah_data_produk($nama, $keterangan, $harga);
        if($add_status){
           echo "<script>alert('Data Produk Berhasil Disimpan!');</script>";
        }else{
            echo "<script>alert('Data Produk Gagal Disimpan!');</script>";
        }
      header('Location: home.php');
  }

?>


<main id="main">
      <div style="margin-top:200px;">
      <header class="section-header">
          <h3>Tambah Produk</h3>
        </header>
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">

                <form action="" method="POST" role="form">
                        <div class="form-group">
                          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Produk"  required/>
                        </div>
                        <div class="form-group">
                          <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan Produk" row="5"  required/>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga"  required/>
                        </div>
                        <div>
                            <input style="background:#1bb1dc;border-color:#1bb1dc;border-radius:6px;margin:10px;" type="submit" class="btn-get-started scrollto" name="tombol_input" value="Simpan"/>
                        </div>
                      </form>
            </div>
        </div>
      </div>


<?php include('footer.php'); ?>