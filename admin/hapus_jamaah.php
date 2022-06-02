<?php
	include'../config/koneksi.php';
	$id_jamaah = $_GET['id_jamaah'];
$sql=mysqli_query($conn, "DELETE FROM jamaah WHERE id_jamaah = $id_jamaah");
header("location: jamaah.php");	
?>