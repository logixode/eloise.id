<?php

    include "connection.php";

    $id             = $_POST['id'];
    $tanggal        = $_POST['tanggal'];
    $kode_jenis     = $_POST['kode_jenis'];
    $jumlah         = $_POST['jumlah'];
    $pengeluaran    = $_POST['pengeluaran'];
    $pemasukan      = $_POST['pemasukan'];
    $laba           = $_POST['laba'];

    // print_r($_POST);

    $update_data = "UPDATE tb_data SET jumlah='$jumlah', kode_jenis='$kode_jenis', jumlah='$jumlah', pengeluaran='$pengeluaran', pemasukan='$pemasukan', laba='$laba' WHERE id='$id'";
    mysqli_query($connect, $update_data);

    header("location:index.php");