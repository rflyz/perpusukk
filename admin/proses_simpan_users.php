<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$Username    = $_POST['Username'];
$Password    = md5($_POST['Password']);
$Email       = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat      = $_POST['Alamat'];


// menginput data ke database
$simpan = mysqli_query($koneksi,"insert into user values ('','$Username','$Password','$Email','$NamaLengkap','$Alamat','2')");

if($simpan) {
    echo "<script>
    alert('Simpan Data Berhasil!');
    document.location='users.php'
    </script>";
}else{
    echo "<script>
    alert('Simpan Data Gagal!');
    document.location='users.php'
    </script>";
}
?>