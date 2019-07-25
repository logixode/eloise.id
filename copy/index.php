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
						function countRow($value)
						{
							global $connect;
							$barang=mysqli_query($connect, "SELECT count(kode_brg) as total from barang");
							$j_barang=mysqli_query($connect, "SELECT count(kode_jenis_brg) as total from jenis_brg");
							$m_barang=mysqli_query($connect, "SELECT count(kode_merek) as total from merek");
							// $result_jenis_brg=mysqli_fetch_assoc($j_barang);
							switch ($value) {
								case 'barang':
									$result_brg=mysqli_fetch_assoc($barang);
									break;
								case 'jenis_brg':
									$result_brg=mysqli_fetch_assoc($j_barang);
									break;
								case 'merek':
									$result_brg=mysqli_fetch_assoc($m_barang);
									break;
							}
							return $result_brg['total'];
							
						// 	// global $jumlah_row_jenis;
						// 	return $value;
						}

					?>
					<div class="row text-center">
						<div class="col-md-4">
							<div class="card text-white bg-dark mb-3 center" style="max-width: 35rem;">
							  <div class="card-header"><h4 class="card-title">Jumlah Data Barang</h4></div>
							  <div class="card-body">
							    
							    <p class="card-text"><h1><?= countRow('barang'); ?></h1></p>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-white bg-dark mb-3 center" style="max-width: 35rem;">
							  <div class="card-header"><h4 class="card-title">Jumlah Jenis Barang</h4></div>
							  <div class="card-body">
							    
							    <p class="card-text"><h1><?= countRow('jenis_brg'); ?></h1></p>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card text-white bg-dark mb-3 center" style="max-width: 35rem;">
							  <div class="card-header"><h4 class="card-title">Jumlah Merek Barang</h4></div>
							  <div class="card-body">
							    
							    <p class="card-text"><h1><?= countRow('merek'); ?></h1></p>
							  </div>
							</div>
						</div>
					</div>

					<?php

						// include "config/connection.php";
						include "delete_data.php";
						
						if (isset($_GET['deletejenisbrg'])) {
							deleteData('deletejenisbrg');
						} elseif (isset($_GET['delete_brg'])) {
							deleteData('delete_brg');
						}

						function editDataJenisBrg(){
							if (isset($_GET['jenisbrg']) && isset($_GET['id'])) { 
								$id 		= $_GET['id'];
						?>
							<form action="edit_data.php" method="POST">
								<fieldset>
									<div class="form-group">
										<label for="jenis-barang">Kode Jenis Barang : </label>
										<input class="form-control" type="number" name="kode_jenis_brg" disabled="true" value="<?= $id ?>" id="">
									</div>
									<input class="form-control" type="hidden" name="kode_jenis_brg" value="<?= $id ?>" >
									<div class="form-group">
										<label for="jenis-barang">Jenis Barang : </label>
										<input class="form-control" type="text" name="jenis_brg" id="" required>
									</div>
									<div class="form-group">
										<label for="jenis-barang">Deskripsi : </label>
										<input class="form-control" type="text" name="deskripsi" id="" required>
									</div>
									<div class="text-right">
										<input class="btn btn-success" type="submit" name="submit" value="Edit Data">
									</div>
								</fieldset>
							</form>
							<?php 
							}
						}

					?>


					<h1>Data barang</h1>
					<div>
						<?php //editDataBrg(); ?>
						<br/>
						<table  id="sorting" class="table">
							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Kode Barang</th>
									<th scope="col">Merek</th>
									<th scope="col">Jenis Barang</th>
									<th scope="col">Barcode Barang</th>
									<th scope="col">Nama Barang</th>
									<th scope="col">Jumlah</th>
									<th scope="col">Option</th>
								</tr>
							</thead>
							<tbody>
							<?php
								include "config/connection.php";		

								$innerJoin_query = "SELECT barang.kode_brg, merek.nama_merek, jenis_brg.jenis_brg, barang.barcode_brg, barang.nama_brg, barang.jumlah_brg
													FROM barang
													INNER JOIN merek ON barang.kode_merek = merek.kode_merek INNER JOIN jenis_brg ON barang.kode_jenis_brg = jenis_brg.kode_jenis_brg;";
								$readQuery = mysqli_query($connect, $innerJoin_query);			
								$no = 0;
								while ($data_col = mysqli_fetch_array($readQuery)) { ++$no; ?>
								
								<tr>
									<td><?= $no ?></td>
									<td><?= $data_col['kode_brg'] ?></td>
									<td><?= $data_col['nama_merek'] ?></td>
									<td><?= $data_col['jenis_brg'] ?></td>
									<td><?= $data_col['barcode_brg'] ?></td>
									<td><?= $data_col['nama_brg'] ?></td>
									<td><?= $data_col['jumlah_brg'] ?></td>
									<td>
										<a href="edit_barang.php?kode_brg=<?= $data_col['kode_brg'] ?> "><?= $btn_edit ?></a>
										<a href="?delete_brg=<?= $data_col['kode_brg'] ?>"><?= $btn_delete ?></a>
									</td>
								</tr>
								<?php
								}
							?>
							</tbody>
						</table>
					</div>

					<hr/>

					<h1>Data Jenis barang</h1>
					<div>
						<?php editDataJenisBrg(); ?>
						<br/>
						<table  id="sorting_jenis" class="table">
							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Kode Jenis Barang</th>
									<th scope="col">Jenis Barang</th>
									<th scope="col">Deskripsi</th>
									<th scope="col">Option</th>
								</tr>
							</thead>
							<tbody>
							<?php
								include "config/connection.php";		

								$readQuery = mysqli_query($connect, "SELECT * FROM jenis_brg");			
								$no = 0;
								while ($data_col = mysqli_fetch_array($readQuery)) { ++$no; ?>
								
								<tr>
									<td><?= $no ?></td>
									<td><?= $data_col['kode_jenis_brg'] ?></td>
									<td><?= $data_col['jenis_brg'] ?></td>
									<td><?= $data_col['deskripsi'] ?></td>
									<td>
										<a href="edit_jenis_brg.php?id=<?= $data_col['kode_jenis_brg'] ?> "><?= $btn_edit ?></a>
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
			    $('#sorting_jenis').DataTable();
			} );
		</script>
	</body>
</html>