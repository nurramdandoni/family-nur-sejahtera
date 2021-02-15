<?php
include('aksi.php');
$lib = new Aksi();
$id = $_GET['id'];
$libS = $lib->hapus_data($id);
if($libS){
    echo "<script>alert('Data berhasil Dihapus!');</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus!');</script>";
}

header('Location: home.php');
?>