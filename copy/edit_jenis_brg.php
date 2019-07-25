<?php

	include "config/connection.php";
	include "config/config_page.php"; 

	$id	= $_GET['id'];
    $read		= mysqli_query($connect, "SELECT * FROM jenis_brg WHERE kode_jenis_brg='$id'");
    $dataDB     = mysqli_fetch_array($read);

?>
<!DOCTYPE html>
<html>
<head>
	<?php include "config/head_config.php"; ?>
</head>

	<body class="bg-dark">

		<?php include "config/header_page.php"; ?>
		<div class="container-fluid">

			<div class="row">
				<?php include "config/nav_page.php"; ?>
				
				<div class="col-sm-10 isi">
					<h1>Edit Data barang</h1>
					<form action="edit_data.php" method="POST">
								<fieldset>
									<div class="form-group">
										<label for="jenis-barang">Kode Jenis Barang : </label>
										<input class="form-control" type="number" name="kode_jenis_brg" readonly value="<?= $id ?>" id="">
									</div>
									<div class="form-group">
										<label for="jenis-barang">Jenis Barang : </label>
										<input class="form-control" type="text" name="jenis_brg" value="<?= $dataDB['jenis_brg'] ?>" id="" required>
									</div>
									<div class="form-group">
										<label for="jenis-barang">Deskripsi : </label>
										<input class="form-control" type="text" name="deskripsi" value="<?= $dataDB['deskripsi'] ?>" id="" required>
									</div>
									<div class="text-right">
										<input class="btn btn-success" type="submit" name="submit" value="Edit Data">
									</div>
								</fieldset>
							</form>

				</div> <!-- / isi -->

			</div>	<!-- / row -->
				
		</div>	<!-- / container -->
		<?php include "config/footer_page.php"; ?>

	</body>
</html>