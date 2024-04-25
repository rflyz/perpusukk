<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$BukuID = $_POST['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];


// menginput data ke database
$update = mysqli_query($koneksi, "UPDATE buku SET Judul='$Judul',Penulis='$Penulis',Penerbit='$Penerbit',TahunTerbit='$TahunTerbit' WHERE BukuID='$BukuID'");


if($update) {
    echo "<script>
    alert('update Data Berhasil!');
    document.location='buku.php'
    </script>";
}else{
    echo "<script>
    alert('update Data Gagal!');
    document.location='buku.php'
    </script>";
}
?>