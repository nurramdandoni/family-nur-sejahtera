<?php
class Aksi
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "fns";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function tambah_data($kode_produk, $nama_produk, $jumlah_produk,$keterangan)
    {
        $data = $this->db->prepare('INSERT INTO tb_produk (kode,nama,jumlah,keterangan) VALUES (?, ?, ?,?)');
        
        $data->bindParam(1, $kode_produk);
        $data->bindParam(2, $nama_produk);
        $data->bindParam(3, $jumlah_produk);
        $data->bindParam(4, $keterangan);

        $data->execute();
        return $data->rowCount();
    }
    public function tambah_data_pesan($nama, $email, $topik, $pesan)
    {
        $data = $this->db->prepare('INSERT INTO tb_pesan (nama,email,topik,pesan) VALUES (?, ?, ?,?)');
        
        $data->bindParam(1, $nama);
        $data->bindParam(2, $email);
        $data->bindParam(3, $topik);
        $data->bindParam(4, $pesan);

        $data->execute();
        return $data->rowCount();
    }
    public function tambah_data_akun($nama, $email, $password)
    {
        $data = $this->db->prepare('INSERT INTO tb_user (nama,email,password) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama);
        $data->bindParam(2, $email);
        $data->bindParam(3, $password);

        $data->execute();
        return $data->rowCount();
    }
    public function tambah_data_produk($nama, $keterangan, $harga)
    {
        $data = $this->db->prepare('INSERT INTO tb_produk (nama_produk,keterangan_produk,harga_produk) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama);
        $data->bindParam(2, $keterangan);
        $data->bindParam(3, $harga);

        $data->execute();
        return $data->rowCount();
    }
    public function login($username,$password)
    {
        $query = $this->db->prepare("SELECT * FROM tb_user where email=? and password=?");
        $query->bindParam(1, $username);
        $query->bindParam(2, $password);
        $query->execute();
        return $query->rowCount();
    }
    public function tampil_data()
    {
        $query = $this->db->prepare("SELECT * FROM tb_produk");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function tampil_data_pengguna()
    {
        $query = $this->db->prepare("SELECT *,b.id as idPR FROM  tb_produk b left join tb_pengguna a on b.id=a.id_produk");
        
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($kode_produk){
        $query = $this->db->prepare("SELECT * FROM tb_produk where kode=?");
        $query->bindParam(1, $kode);
        $query->execute();
        return $query->fetch();
    }

    public function edit_data($kode_produk,$nama_produk,$jumlah_produk,$keterangan){
        $query = $this->db->prepare('UPDATE tb_produk set nama=?,jumlah=?,keternagan=? where kode=?');
        
        $query->bindParam(1, $nama_produk);
        $query->bindParam(2, $jumlah_produk);
        $query->bindParam(3, $keterangan);
        $query->bindParam(4, $kode_produk);

        $query->execute();
        return $query->rowCount();
    }

    public function hapus_data($kode_produk)
    {
        $query = $this->db->prepare("DELETE FROM tb_produk where id=?");

        $query->bindParam(1, $kode_produk);

        $query->execute();
        return $query->rowCount();
    }

}
?>