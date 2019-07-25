<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("location:{$base_url}../login.php");
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

            <h2>Kelola User</h2>

                <?php
                    if (isset($_GET['id']) && isset($_GET['username'])) { ?>     

                    <div class="card p-3 mb-3">
                        <h4 class="pb-2">
                            <?= "Edit User " . $_GET['username']; ?>
                        </h4>
                        <form action="../src/update_user.php" method="POST">
                            <div class="row">
                                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                                <div class="col-md-6">
                                    <input class="form-control input-field" type="text" value="<?= $_GET['username'] ?>" placeholder="Username" name="username" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control input-field" type="password" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 text-white mt-2">Edit User</button>
                        </form>   
                    </div>

                    <?php 
                    } 
                ?>
            <div class="card p-3 mb-3">
                <table class="table" id="sorting">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">Hak Akses</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include "../config/connection.php";

                            $read   = mysqli_query($connect, "SELECT * FROM tb_user");
                            $no     = 0;

                            
                            while ($data_col = mysqli_fetch_array($read)) { 
                                $link_edit = "kelola_user.php?id=" . $data_col['id'] . 
                                            "&username=" . $data_col['username'];
                                ++$no; ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data_col['username']; ?></td>
                                <td><?= $data_col['previlege']; ?></td>
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

            <a href="#" class="mb-3">
                <button type="submit" class="btn btn-primary w-100 text-white mt-2">Tambah User</button>
            </a>

        </div> <!-- / container-fluid -->
        <?php include "../src/footer_page.php"; ?>

    </div> <!-- / col-md-10 -->

</div>	<!-- / row -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#sorting').DataTable();
    $('#sorting_jenis').DataTable();
} );
</script>
</body>
</html>