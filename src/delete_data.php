<?php

    include "../config/connection.php";

    $id = $_GET['id'];

    $update_harga = "DELETE FROM tb_data WHERE id='$id'";
    mysqli_query($connect, $update_harga);

    header("location:../index.php");