<?php
include 'header.php';
include 'navbar.php';

?>
         <div class="content mt-3">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="proses_simpan_koleksi.php">
                            <div class="form-group">
                                <label>Pilih Buku</label>
                                <select class="form-control mt-2" name="BukuID">
                                    <option>Silahkan Pilih</option>
                                
                                 <?php 
		                        include '../koneksi.php';
		                        $data = mysqli_query($koneksi,"SELECT * FROM buku");
	                        	while($d_buku = mysqli_fetch_array($data)){
		                    	?>
                                  <option value="<?php echo $d_buku['BukuID']; ?>"><?php echo $d_buku['Judul']; ?></option>
                                  <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pilih Kategori</label>
                                <select class="form-control mt-2" name="KategoriID">
                                    <option>Silahkan Pilih</option>
                                
                                 <?php 
		                        include '../koneksi.php';
                                $data = mysqli_query($koneksi,"SELECT * FROM kategoribuku");
	                        	while($kategoribuku = mysqli_fetch_array($data)){
		                    	?>
                                <option value="<?php echo $kategoribuku['KategoriID']; ?>"><?php echo $kategoribuku['NamaKategori']; ?></option>
                               <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="form-control btn btn-primary btn-sm mt-3">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include 'footer.php';
            ?>