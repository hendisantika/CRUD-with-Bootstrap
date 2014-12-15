<?php
include 'config/koneksi.php';
$kode = $_GET['id_siswa'];

mysql_query("DELETE FROM siswa WHERE id_siswa=$kode");
header('Location: index.php');
?>