<?php
error_reporting(0);
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD dengan Bootstrap</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2>Data Siswa</h2><a href="tambah.php" class="btn btn-success">Tambah</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<table class="table table-striped">
				<thead>
					<th>No</th>
					<th>Nama Siswa</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</thead>
					<?php
					$sql = mysql_query("SELECT * FROM siswa");
					$no=1;
					while ($tampil = mysql_fetch_array($sql)) {
						echo "
				<tbody>
						<td>$no</td>";
						echo"
						<td>$tampil[nama_siswa]</td>
						<td>$tampil[alamat]</td>
						<td>
						<a href='edit.php?id_siswa=$tampil[id_siswa]' class='btn btn-info'>EDIT</a>
						<a href='hapus.php?id_siswa=$tampil[id_siswa]' 
   title='Hapus' class='btn btn-danger'>HAPUS</a>
						</td>
				</tbody>
						";
					$no++;}
					?>
			</table>
		</div>
	</div>
	<footer>
		&copy; <a href="http://mafulprayogaarnandi.blogspot.com" target="_blank">Maful Prayoga Arnandi</a> | <h3><a href="http://bocahdesa.com/1njci5">Back to Tutorial</a></h3>
	</footer>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
