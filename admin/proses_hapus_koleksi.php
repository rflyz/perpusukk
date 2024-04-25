<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$KategoriBukuID = $_GET['KategoriBukuID'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi,"delete from kategoribuku_relasi where KategoriBukuID='$KategoriBukuID'");
 
// mengalihkan halaman kembali ke index.php

if($hapus) {
    echo "<script>
    alert('hapus Data Berhasil!');
    document.location='koleksi.php'
    </script>";
}else{
    echo "<script>
    alert('hapus Data Gagal!');
    document.location='koleksi.php'
    </script>";
}
?>
