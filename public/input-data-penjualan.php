<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("location:./login.php");
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
    <?php 
        include "../src/config_page.php"; 
        include "../base_url.php";
        include "../src/header_page.php"; 
    ?>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </head>

	<body>

        <?php include "../src/nav_page.php"; ?>
        <!-- <div class="row"> -->

            <!-- col-md-10 -->
                <div class="container-fluid content">

                    <h2>Input Data Penjualan</h2>
                    
                    <div class="card p-3">
                
                    <form action="<?= $base_url ?>/public/proses-inputpenjualan.php" method="POST">
                    
                        <div class="form-group">
                            <label for="jenis_kerudung" class="col-form-label">Jenis Kerudung</label>
                            <select class='form-control' name="kode_jenis">
                                <option value="1">Segi Empat</option>
                                <option value="2">Pasmina Diamond</option>
                                <option value="3">Pasmina Ceruty</option>
                            </select>
                            <!-- <label for="jumlah" class="col-form-label">Jumlah : </label> -->
                            <!-- <input type="number" class="form-control" name="jumlah" placeholder="Jumlah barang" required> -->
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-form-label">Jumlah : </label>
                            <input type="number" class="form-control" name="jumlah" placeholder="Jumlah barang" required>
                        </div>
                        <button class="btn btn-primary w-100" type="Submit">Tambahkan</button>
                    </form>  

            </div> <!-- / card -->
    </div> <!-- / container-fluid -->
        <?php include "../src/footer_page.php"; ?>

    </div> <!-- / col-md-10 -->

</div>	<!-- / row -->

</body>
</html>
