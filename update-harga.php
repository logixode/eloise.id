<?php

    include "connection.php";

    $id = $_POST['id'];
    $harga = $_POST['harga'];

    // print_r($_POST);

    $update_harga = "UPDATE harga SET harga='$harga' WHERE kode_jenis='$id'";
    mysqli_query($connect, $update_harga);

    header("location:daftar-harga.php");