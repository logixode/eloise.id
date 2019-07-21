<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Harga</title>
</head>
<body>
    <h2>Input Data Penjualan</h2>
    <form action="update-harga.php" method="POST">
        <label for="jenis_kerudung">Jenis Kerudung</label>
        <select name="jenis_kerudung">
            <option value="k_segiempat">Segi Empat</option>
            <option value="kp_diamond">Pasmina Diamond</option>
            <option value="kp_ceruty">Pasmina Ceruty</option>
        </select>
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" placeholder="Jumlah barang">
        <input type="submit" value="Edit Data">
    </form>  
    <table>
        <tr>
            <td>No.</td>
            <td>Data</td>
            <td>Harga</td>
            <td>Pengaturan</td>
        </tr>
        <?php

            include "connection.php";

            $read   = mysqli_query($connect, "SELECT * FROM tb_data");
            $no     = 0;

            
            while ($data_col = mysqli_fetch_array($read)) { 
                $link_edit = "daftar-harga.php?id=" . $data_col['id'] . 
                              "&data=" . $data_col['data'];
                ++$no; 
        ?>

            <tr>
                <td><?= $no; ?></td>
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
</body>
</html>