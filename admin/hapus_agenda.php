<?php
	include'../config/koneksi.php';
	$id_agenda = $_GET['id_agenda'];
$sql=mysqli_query($conn, "DELETE FROM agenda WHERE id_agenda = $id_agenda");
header("location: agenda.php");	
?>