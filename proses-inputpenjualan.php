<?php

    include "connection.php";
    include "data_harga";

    $tanggal        = date("Y-m-d");
    $kode_jenis     = $_POST['kode_jenis'];
    $jumlah         = $_POST['jumlah'];
    $pengeluaran    = $jumlah * ($harga_kain + $biaya_jahit + $label);
    $laba           = $harga_kerudung - $pengeluaran ;
    $query          = mysqli_query($connect, "INSERT INTO data SET ");

    switch ($kode_jenis) {
        case 1:
            $harga_kerudung = $;
            $harga_kain = $harga_kain_se;
            break;
        case 2:
            $harga_kerudung = $;
            $harga_kain = $harga_kain_pd;
            break;
        case 3:
            $harga_kerudung = $;
            $harga_kain = $harga_kain_pc;
            break;
    }

    echo $tanggal . " " . $kode_jenis . " " . $jumlah . " " . $pengeluaran 