<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];


// menginput data ke database
$simpan = mysqli_query($koneksi,"insert into kategoribuku_relasi values ('','$BukuID','$KategoriID')");

if($simpan) {
    echo "<script>
    alert('Simpan Data Berhasil!');
    document.location='koleksi.php'
    </script>";
}else{
    echo "<script>
    alert('Simpan Data Gagal!');
    document.location='koleksi.php'
    </script>";
}
?>