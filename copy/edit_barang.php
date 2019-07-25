<?php

	include "config/connection.php";
	include "config/config_page.php"; 

	$kode_brg	= $_GET['kode_brg'];
	$read		= mysqli_query($connect, "SELECT * FROM barang WHERE kode_brg='$kode_brg'");
	$data_brg	= mysqli_fetch_array($read);

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
					<form action="edit_data_brg.php" method="POST">
						<fieldset>
							<div class="form-group">
								<label>Kode Barang</label>
								<input class="form-control" placeholder="Masukkan Kode Barang" type="number" name="kode_brg" required readonly value="<?= $kode_brg ?>">
							</div>
							<div class="form-group">
								<label>Merek</label>
								<select class='form-control' type='text' name='kode_merek' required>
								<?php
									$get_kode_merek = mysqli_query($connect, "SELECT * FROM merek");
									foreach ($get_kode_merek as $key) { ?>

									<option value="<?= $key['kode_merek'] ?>"><?= $key['nama_merek']?></option>

								<?php }	?>
								</select>
							</div>
							<div class="form-group">
								<label>Kode Jenis Barang</label>
								<select class='form-control' type='text' name='kode_jenis_brg' required>
								<?php
									$get_kode_jenis = mysqli_query($connect, "SELECT * FROM jenis_brg");
									foreach ($get_kode_jenis as $keys) { ?>

									<option value="<?= $keys['kode_jenis_brg'] ?>"><?= $keys['jenis_brg']?></option>

								<?php }	?>
								</select>
							</div>	

							<div class="form-group">
								<label>Barcode Barang</label>
								<input class="form-control" placeholder="Masukkan Barcode Barang" type="number" value="<?= $data_brg['barcode_brg'] ?>" name="barcode_brg" required>
							</div>	

							<div class="form-group">
								<label>Nama Barang</label>
								<input class="form-control" placeholder="Masukkan Nama Barang" type="text" value="<?= $data_brg['nama_brg'] ?>" name="nama_brg" required>
							</div>	

							<div class="form-group">
								<label>Jumlah Barang</label>
								<input class="form-control" placeholder="Masukkan Jumlah Barang" type="number" value="<?= $data_brg['jumlah_brg'] ?>" name="jumlah_brg" required>
							</div>	

							<div class="text-right">
								<button class="btn btn-primary" type="submit">Edit Data</button>
							</div>
						</div>
						</fieldset>
					</form>

				</div> <!-- / isi -->

			</div>	<!-- / row -->
				
		</div>	<!-- / container -->
		<?php include "config/footer_page.php"; ?>

	</body>
</html>