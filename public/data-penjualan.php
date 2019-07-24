<?php
    include "config/connection.php";


    /**
     * Mengganti data tanngal default ke format yang biasa di Indonesia
     *
     * @param   string      $value      variabel input dari $date2 di dataRegistrasi   
     * @param   string      $tanggal    output   
     * @return  $tanggal
     */
    function tanggal($value){
        $tanggal = $value->format('d-m-Y');
        return $tanggal;
    }

    $tanggal = date("Y-m-d");


    // if (isset($_POST)) {
    //     $kode_jenis = $_POST['kode_jenis'];
    //     $jumlah = $_POST['jumlah'];
        

    // }
?>
   
   <table class="table">
        <tr>
            <td>No.</td>
            <td>Tanggal</td>
            <td>Jenis Kerudung</td>
            <td>Jumlah</td>
            <td>Pengeluaran</td>
            <td>Pemasukan</td>
            <td>Laba</td>
            <td>Pengaturan</td>
        </tr>
        <?php

            include "data_harga.php";

            $read   = mysqli_query($connect, "SELECT * FROM tb_data");
            $no     = 0;

            
            while ($data_col = mysqli_fetch_array($read)) { 
                $link_edit = "public/daftar-harga.php?id=" . $data_col['id'] . 
                $link_delete = "public/data-penjualan.php?delete=" . $data_col['id'];
                $konversi_tanggal          = new DateTime($data_col['tanggal']);
                ++$no; 
        ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= tanggal($konversi_tanggal); ?></td>
                <td><?= getJenisKerudung($data_col['kode_jenis']); ?></td>
                <td><?= $data_col['jumlah']; ?></td>
                <td><?= $data_col['pengeluaran']; ?></td>
                <td><?= $data_col['pemasukan']; ?></td>
                <td><?= $data_col['laba']; ?></td>
                <td>
                    <a href="<?= $link_edit; ?>">Edit</a>
                    <a href="<?= $link_delete; ?>">Delete</a>
                </td>
            </tr>

        <?php } ?>
    </table>