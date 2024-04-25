<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];


// menginput data ke database
$simpan = mysqli_query($koneksi,"insert into buku values ('','$Judul','$Penulis','$Penerbit','$TahunTerbit')");

if($simpan) {
    echo "<script>
    alert('Simpan Data Berhasil!');
    document.location='buku.php'
    </script>";
}else{
    echo "<script>
    alert('Simpan Data Gagal!');
    document.location='buku.php'
    </script>";
}
?>