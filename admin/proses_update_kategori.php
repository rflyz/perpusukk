<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['namakategori'];


// menginput data ke database
$update = mysqli_query($koneksi, "UPDATE kategoribuku SET NamaKategori='$NamaKategori' WHERE KategoriID='$KategoriID'");


if($update) {
    echo "<script>
    alert('update Data Berhasil!');
    document.location='kategori.php'
    </script>";
}else{
    echo "<script>
    alert('update Data Gagal!');
    document.location='kategori.php'
    </script>";
}
?>