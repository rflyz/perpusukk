<?php
include 'header.php';
include 'navbar.php';

?>
         <div class="content mt-3">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="proses_simpan_ulasan.php">
                            <select name="BukuID" class="form-control">
                                <?php
                                $buk = mysqli_query ($koneksi, "select * from buku");
                                while($buku = mysqli_fetch_array($buk)){
                                ?>
                                <option value="<?php echo $buku ['BukuID']; ?>"><?php echo $buku['judul']; ?></option>
                                <?php
                                }
                                ?>
                            <div class="row-mb-3">
                                <label>Ulasan</label>
                                <input type="text" name="Ulasan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ulasan</label>
                                <input type="text" name="Email" class="form-control">
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