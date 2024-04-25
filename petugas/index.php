<?php
include 'header.php';
include 'navbar.php';

?>
         <div class="content mt-3">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body bg-warning text-center">
                            <h3>Pendatan Barang</h3>
                            <h2>4</h2>
                        <hr>
                        <a href="buku.php" class="btn btn-dark btn-sm">Lihat Data -> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body bg-danger text-center">
                            <h3>Generate Laporan</h3>
                            <h2>4</h2>
                        <hr>
                        <a href="laporan.php" class="btn btn-dark btn-sm">Lihat Data -> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body bg-primary text-center">
                            <h3>permintaan Peminjaman</h3>
                            <h2>3</h2>
                        <hr>
                        <a href="peminjaman.php" class="btn btn-dark btn-sm">Lihat Data -> </a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="content mt-3">
                <div class="card">
                    <div class="card-body">
                    <p>Halo <b><?php echo $_SESSION['Username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['Level']; ?></b>.
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <?php
            include 'footer.php';
            ?>