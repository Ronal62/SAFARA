<?php
	include'../config/koneksi.php';
	$id_berita = $_GET['id_berita'];
$sql=mysqli_query($conn, "DELETE FROM berita WHERE id_berita = $id_berita");
header("location: berita.php");	
?>
