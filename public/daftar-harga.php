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

            <h2>Daftar Harga</h2>
            <div class="card p-3">
                <table class="table" id="sorting">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Data</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include "../config/connection.php";

                            $read   = mysqli_query($connect, "SELECT * FROM tb_harga");
                            $no     = 0;

                            
                            while ($data_col = mysqli_fetch_array($read)) { 
                                $link_edit = "daftar-harga.php?id=" . $data_col['kode_jenis'] . 
                                            "&data=" . $data_col['data'];
                                ++$no; ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data_col['data']; ?></td>
                                <td><?= $data_col['harga']; ?></td>
                                <td>
                                    <a href="<?= $link_edit; ?>"><?= $btn_edit; ?></a>
                                </td>
                            </tr>

                            <?php 
                            } 
                        ?>

                    </tbody>
                </table>
            </div>

                <?php
                    if (isset($_GET['id']) && isset($_GET['data'])) {
                        echo "Set Harga " . $_GET['data'];
                ?>     
                <form action="update-harga.php" method="POST">
                        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                        <input type="number" name="harga" placeholder="Isikan harga baru">
                        <input type="submit" value="Edit Data">
                </form>   
            <?php } ?>

        </div> <!-- / container-fluid -->
        <?php include "../src/footer_page.php"; ?>

    </div> <!-- / col-md-10 -->

</div>	<!-- / row -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'top-end',
    //     showConfirmButton: false,
    //     timer: 3000
    //     });

    //     Toast.fire({
    //     type: 'success',
    //     title: 'Signed in successfully'
    //     });
</script>
</body>
</html>