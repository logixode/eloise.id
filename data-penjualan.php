   <?php
        include "connection.php";

        $tanggal = date("Y-m-d");
        if (isset($_POST)) {
            $kode_jenis = $_POST['kode_jenis'];
            $jumlah = $_POST['jumlah'];
            

        }
   ?>
   
   <table>
        <tr>
            <td>No.</td>
            <td>Data</td>
            <td>Harga</td>
            <td>Pengaturan</td>
        </tr>
        <?php

            include "connection.php";

            $read   = mysqli_query($connect, "SELECT * FROM data");
            $no     = 0;

            
            while ($data_col = mysqli_fetch_array($read)) { 
                $link_edit = "daftar-harga.php?id=" . $data_col['id'] . 
                              "&data=" . $data_col['data'];
                ++$no; 
                switch ($data_col['kode_jenis']) {
                    case 1:
                        $jenis_kerudung = "Segi Empat";
                        break;
                    case 2:
                        $jenis_kerudung = "Pasmina Diamond";
                        break;
                    case 3:
                        $jenis_kerudung = "Pasmina Ceruty";
                        break;
                }
        ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $data_col['tanggal']; ?></td>
                <td><?= $jenis_kerudung; ?></td>
                <td><?= $data_col['harga_kain']; ?></td>
                <td><?= $biaya_jahit; ?></td>
                <td><?= $harga_label; ?></td>
                <td><?= $data_col['harga_jual']; ?></td>
                <td><?= $data_col['pengeluaran']; ?></td>
                <td><?= $laba; ?></td>
                <td>
                    <a href="<?= $link_edit; ?>">Edit</a>
                </td>
            </tr>

        <?php } ?>
    </table>