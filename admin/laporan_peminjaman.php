<?php
include 'header.php';
include 'navbar.php';

?>
         <div class="content mt-3">
                <div class="card">
                    <div class="card-body">
                    <p>Halo <b><?php echo $_SESSION['Username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['Level']; ?></b>.
                    </p>
                    </div>
                </div>
            </div>
            <?php
            include 'footer.php';
            ?>