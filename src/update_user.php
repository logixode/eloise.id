<?php 

    include "../config/connection.php";

    $id       = $_POST['id'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // mysqli_query($connect, "INSERT INTO tb_user (username, password, previlege) VALUES ('$username','$password','admin')");
    mysqli_query($connect, "UPDATE tb_user SET username='$username', password='$password' WHERE id='$id'");
    // $check = mysqli_num_rows($query);
    //print_r($_POST);
    header("location:{$base_url}/public/kelola_user.php");
    