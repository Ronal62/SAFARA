<?php
	include'../config/koneksi.php';
	$id_admin = $_GET['id_admin'];
$sql=mysqli_query($conn, "DELETE FROM admin WHERE id_admin = $id_admin");
header("location: admin.php");	
?>