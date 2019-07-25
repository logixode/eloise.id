<?php

ob_start();
	session_start();
	function setAlert(){
		if(isset($_SESSION['pesan_error'])){
			$output = "<div class='alert alert-danger'>";
			$output.= htmlentities($_SESSION['pesan_error']);
			$output.= "</div>";
			$_SESSION['pesan_error'] = null;

			return $output;
		}
	}