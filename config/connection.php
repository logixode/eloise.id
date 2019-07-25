<?php

    $server     = "localhost";
    $user       = "root";
    $password	= "";
    $database   = "id10273728_db_eloise";

    $connect = mysqli_connect($server, $user, $password, $database) or die("Koneksi Gagal!" . mysqli_connect_error());
