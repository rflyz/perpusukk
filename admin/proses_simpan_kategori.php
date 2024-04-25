<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$NamaKategori = $_POST['namakategori'];

// menginput data ke database
$simpan = mysqli_query($koneksi,"insert into kategoribuku values ('','$NamaKategori')");

if($simpan) {
    echo "<script>
    alert('Simpan Data Berhasil!');
    document.location='kategori.php'
    </script>";
}else{
    echo "<script>
    alert('Simpan Data Gagal!');
    document.location='kategori.php'
    </script>";
}
?>