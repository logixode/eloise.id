<?php include "config/config_page.php"; ?>
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
					<?php
							include "config/connection.php";
							include "delete_data.php";
							//require_once ("session.php");
							
							if (isset($_POST['jenis_brg']) && isset($_POST['kode_jenis_brg']) && isset($_POST['deskripsi'])) {
								$kode_jenis_brg = $_POST['kode_jenis_brg'];
								$jenis_brg		= $_POST['jenis_brg'];
								$deskripsi 		= $_POST['deskripsi'];

								mysqli_query($connect, "INSERT INTO jenis_brg SET kode_jenis_brg='$kode_jenis_brg', jenis_brg='$jenis_brg', deskripsi='$deskripsi'");
							}

							if (isset($_GET['deletejenisbrg'])) {
								deleteData('deletejenisbrg');
							}
							
						?>

						<h1>Kelola Jenis barang</h1>
						<div>
							<form action="add_data.php" method="POST">
								<fieldset>
									<?php //echo setAlert(); ?>
									<div class="form-group">
										<label for="jenis-barang">Kode Jenis Barang : </label>
										<input class="form-control" type="number" name="kode_jenis_brg" id="">
									</div>
									<div class="form-group">
										<label for="jenis-barang">Jenis Barang : </label>
										<input class="form-control" type="text" name="jenis_brg" id="" required>
									</div>
									<div class="form-group">
										<label for="jenis-barang">Deskripsi : </label>
										<input class="form-control" type="text" name="deskripsi" id="" required>
									</div>
									<div class="text-right">
										<input class="btn btn-success" type="submit" name="submit" value="Tambah Jenis Barang">
									</div>
								</fieldset>
							</form>
							<br/>
							<table id="sorting" class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Kode Jenis Barang</th>
										<th>Jenis Barang</th>
										<th>Deskripsi</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
					<?php
						// include "connection.php";		

						$readQuery = mysqli_query($connect, "SELECT * FROM jenis_brg");			
						$no = 0;
						while ($data_col = mysqli_fetch_array($readQuery)) {
							++$no; ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $data_col['kode_jenis_brg'] ?></td>
								<td><?= $data_col['jenis_brg'] ?></td>
								<td><?= $data_col['deskripsi'] ?></td>
								<td>
									<a href="edit_jenis_brg.php?jenisbrg=edit&id=<?= $data_col['kode_jenis_brg'] ?>"><?= $btn_edit ?></a>
									<a href="?deletejenisbrg=<?= $data_col['kode_jenis_brg'] ?>"><?= $btn_delete ?></a>
								</td>
							</tr>
						<?php 
						} 
					?>

								</tbody>
							</table>
						</div>
				</div> <!-- / isi -->

			</div>	<!-- / row -->
		
		</div>	<!-- / container -->

		<?php include "config/footer_page.php"; ?>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#sorting').DataTable();
			} );
		</script>
	</body>
</html>
<!-- === EOF === -->