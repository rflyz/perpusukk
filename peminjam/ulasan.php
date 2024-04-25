<?php
include 'header.php';
include 'navbar.php';

?>
         <div class="content mt-3">
                <div class="card">
                    <div class="card-body">
                            <?php 
	                            if(isset($_GET['pesan'])){
	                            	if($_GET['pesan']=="simpan"){
			                            echo "<div class='alert alert-success'>Username dan Password tidak sesuai !</div>";
	                            	}
	                            }
                                if(isset($_GET['pesan'])){
	                            	if($_GET['pesan']=="update"){
			                            echo "<div class='alert alert-info'>Maaf Anda Belum Login !</div>";
	                            	}
	                            }
                                if(isset($_GET['pesan'])){
	                            	if($_GET['pesan']=="hapus"){
			                            echo "<div class='alert alert-danger'>anda berhasil logout !</div>";
	                            	}
	                            }
                                ?>
                            <a href="#" class="font font-width 100" class="btn btn-white btn-sm mt-3">Buku Apa Yang Ingin Memberi Ulasan ?</a>
                            <br>
                            <a href="tambah_ulasan.php" class="btn btn-primary btn-sm mt-3">+ Tambah Buku</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nama user</th>
                                    <th>Judul Buku</th>
                                    <th>Ulasan</th>
                                    <th>Rating</th>
                                    <th>Aksi</th>   
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from ulasanbuku");
		while($d = mysqli_fetch_array($data)){
			?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['UlasanID']; ?></td>
                                    <td><?php echo $d['UserID']; ?></td>
                                    <td><?php echo $d['BukuID']; ?></td>
                                    <td><?php echo $d['Ulasan']; ?></td>
                                    <td><?php echo $d['Rating']; ?></td>
                                    <td>
                                        <a href="edit_ulasan.php?BukuID=<?php echo $d['UlasanID']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
                                        <a href="proses_hapus_ulasan.php?BukuID=<?php echo $d['UlasanID']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>
                                    </td>
                                </tr>
                                <?php } 
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            include 'footer.php';
            ?>