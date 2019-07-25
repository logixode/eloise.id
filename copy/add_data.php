<?php

	include "config/connection.php";
	include "session.php";

	$kode_jenis_brg = $_POST['kode_jenis_brg'];
	$jenis_brg		= $_POST['jenis_brg'];
	$deskripsi 		= $_POST['deskripsi'];

	if ($kode_jenis_brg<10) {
		$_SESSION['pesan_error'] = "Kode angka tidak boleh kurang dari 10";
		// header("location:add_post.php");
	}
	else{
		mysqli_query($connect, "INSERT INTO jenis_brg SET kode_jenis_brg='$kode_jenis_brg', jenis_brg='$jenis_brg', deskripsi='$deskripsi'");
		// header("location:add_post.php");
	}
	header('location:add_post.php');
