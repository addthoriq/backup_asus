<?php
	include 'koneksi.php';
	$pelajaran	= $_POST['mata_pelajaran'];
	$status	= $_POST['status'];

	$scl	= "INSERT INTO pelajaran (mata_pelajaran, status) VALUES ('$pelajaran', '$status')";
	
	mysqli_query($konek, $scl);
	header('location: pelajaran.php');
?>
