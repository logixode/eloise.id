<?php 

	include "config/connection.php";
		
	$id 		= $_POST['kode_jenis_brg'];
	$jenis_brg 	= $_POST['jenis_brg'];
	$deskripsi	= $_POST['deskripsi']; 

	mysqli_query($connect, "UPDATE jenis_brg SET jenis_brg='$jenis_brg', deskripsi='$deskripsi' WHERE kode_jenis_brg='$id'");

	header("location:index.php");


// === EOF === //