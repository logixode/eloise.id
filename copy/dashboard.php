<?php

	include "connection.php";
	include "delete_data.php";
	
	if (isset($_GET['delete'])) {
		deleteData();
	}

	function editData(){
		if (isset($_GET['action']) && isset($_GET['id'])) { 
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

<h1>Edit Data barang</h1>
<div>
	<?php editData(); ?>
	<br/>
	<table class="table">
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Kode Jenis Barang</th>
			<th scope="col">Jenis Barang</th>
			<th scope="col">Deskripsi</th>
			<th scope="col">Option</th>
		</tr>
	<?php
		include "connection.php";		

		$readQuery = mysqli_query($connect, "SELECT * FROM jenis_brg");			
		$no = 0;
		while ($data_col = mysqli_fetch_array($readQuery)) { ++$no; ?>
		
		<tr>
			<td><?= $no ?></td>
			<td><?= $data_col['kode_jenis_brg'] ?></td>
			<td><?= $data_col['jenis_brg'] ?></td>
			<td><?= $data_col['deskripsi'] ?></td>
			<td>
				<a href="?action=edit&id=<?= $data_col['kode_jenis_brg'] ?> ">Edit</a>
				<a href="?delete=<?= $data_col['kode_jenis_brg'] ?>">Delete</a>
			</td>
		</tr>

		<?php
		}
	?>

	</table>
</div>

<!-- === EOF === -->