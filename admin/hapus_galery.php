<?php
	include'../config/koneksi.php';
	$id_galery = $_GET['id_galery'];
$sql=mysqli_query($conn, "DELETE FROM galery WHERE id_galery = $id_galery");
header("location: galery.php");	
?>