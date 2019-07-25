<?php

	include "config/connection.php";

	function deleteData($value)
	{
		global $connect;
		
		$id = $_GET[$value];

		if ($value=='deletejenisbrg') {
			mysqli_query($connect, "DELETE FROM jenis_brg WHERE kode_jenis_brg='$id'");
		} elseif ($value=='delete_brg') {
			mysqli_query($connect, "DELETE FROM barang WHERE kode_brg='$id'");
		}
	
	}
// === EOF === //