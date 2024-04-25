<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$UserID = $_GET['id'];
 
// menghapus data dari database
$hapus = mysqli_query($koneksi,"delete from user where UserID='$UserID'");
 
// mengalihkan halaman kembali ke index.php

if($hapus) {
    echo "<script>
    alert('hapus Data Berhasil!');
    document.location='users.php'
    </script>";
}else{
    echo "<script>
    alert('hapus Data Gagal!');
    document.location='users.php'
    </script>";
}
?>
