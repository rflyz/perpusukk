<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$BukuID = $_GET['BukuID'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi,"delete from buku where BukuID='$BukuID'");
 
// mengalihkan halaman kembali ke index.php

if($hapus) {
    echo "<script>
    alert('hapus Data Berhasil!');
    document.location='buku.php'
    </script>";
}else{
    echo "<script>
    alert('hapus Data Gagal!');
    document.location='buku.php'
    </script>";
}
?>
