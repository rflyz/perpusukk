<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$UserID = $_POST['UserID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];


// menginput data ke database
$update = mysqli_query($koneksi, "UPDATE user SET Username='$Username',Password='$Password',Email='$Email',NamaLengkap='$NamaLengkap',Alamat='$Alamat' WHERE UserID='$UserID'");


if($update) {
    echo "<script>
    alert('update Data Berhasil!');
    document.location='users.php'
    </script>";
}else{
    echo "<script>
    alert('update Data Gagal!');
    document.location='users.php'
    </script>";
}
?>