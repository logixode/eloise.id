<?php

	include "config/connection.php";

	$kode_brg 		= $_POST['kode_brg'];
	$kode_merek 	= $_POST['kode_merek'];
	$kode_jenis_brg = $_POST['kode_jenis_brg'];
	$barcode_brg 	= $_POST['barcode_brg'];
	$nama_brg 		= $_POST['nama_brg'];
	$jumlah_brg 	= $_POST['jumlah_brg'];

	$edit = "UPDATE barang SET kode_merek='$kode_merek', kode_jenis_brg='$kode_jenis_brg', barcode_brg='$barcode_brg', nama_brg='$nama_brg', jumlah_brg='$jumlah_brg' WHERE kode_brg='$kode_brg'";

	mysqli_query($connect, $edit);

	header("location:index.php");
