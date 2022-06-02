<?php
	include'../config/koneksi.php';
	$id_kategori = $_GET['id_kategori'];
$sql=mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = $id_kategori");
header("location: kategori.php");	
?>