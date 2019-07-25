<?php
	
	$host		= "localhost";
	$user		= "id10273728_root";
	$password 	= "321654987";
	$database	= "id10273728_db_barang";

	$connect = mysqli_connect($host, $user, $password, $database) or die("Koneksi gagal!" . mysqli_connect_error());

?>