<?php
include 'header.php';
include 'navbar.php';

?>
         <div class="content mt-3">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="proses_simpan_kategori.php">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" name="namakategori" class="form-control">
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