<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Harga</title>
</head>
<body>
    <h2>Daftar Harga</h2>
    <table>
        <tr>
            <td>No.</td>
            <td>Data</td>
            <td>Harga</td>
            <td>Pengaturan</td>
        </tr>
        <?php

            include "../config/connection.php";

            $read   = mysqli_query($connect, "SELECT * FROM tb_harga");
            $no     = 0;

            
            while ($data_col = mysqli_fetch_array($read)) { 
                $link_edit = "daftar-harga.php?id=" . $data_col['kode_jenis'] . 
                              "&data=" . $data_col['data'];
                ++$no; 
        ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $data_col['data']; ?></td>
                <td><?= $data_col['harga']; ?></td>
                <td>
                    <a href="<?= $link_edit; ?>">Edit</a>
                </td>
            </tr>

        <?php } ?>
    </table>

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

</body>
</html>