<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$KategoriID = $_GET['KategoriID'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi,"delete from kategoribuku where KategoriID='$KategoriID'");
 
// mengalihkan halaman kembali ke index.php

if($hapus) {
    echo "<script>
    alert('hapus Data Berhasil!');
    document.location='kategori.php'
    </script>";
}else{
    echo "<script>
    alert('hapus Data Gagal!');
    document.location='kategori.php'
    </script>";
}
?>
