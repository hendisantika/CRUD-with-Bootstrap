<?php
include 'config/koneksi.php';
$kode = $_GET['id_siswa'];
$tampil = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE id_siswa = '$kode'"));
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
		<div class="col-md-8">
			<h3>Edit Data Siswa</h3><a href="index.php" class="btn btn-info">Lihat Data</a><hr>
			<form role="form" action="" method="post">
			<input type="hidden" name="id" value="<?php echo $tampil['id_siswa'];?>">
					<div class="form-group">
					    <label>Nama Siswa</label>
					    <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama_siswa'];?>" required autofocus>
					</div>
					<div class="form-group">
					    <label>Alamat</label>
					    <textarea class="form-control" required name="alamat"><?php echo $tampil['alamat'];?></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
			</form>
			<?php
				if (isset($_POST["simpan"])) {
					$simpan = mysql_query("UPDATE siswa SET nama_siswa = '$_POST[nama]', alamat = '$_POST[alamat]' WHERE id_siswa = '$_POST[id]'");
					if ($simpan) {
						header('Location: index.php');
					}else{
						echo "Gagal!";
					}
				}
				?>
		</div>
	</div>
	<footer>
		&copy; <a href="http://mafulprayogaarnandi.blogspot.com" target="_blank">Maful Prayoga Arnandi</a>
	</footer>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
