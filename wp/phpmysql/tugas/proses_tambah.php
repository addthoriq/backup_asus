<?php
	include 'koneksi.php';
	$nama		= $_POST['nama'];
	$kelas	= $_POST['kelas'];
	$mapel	= $_POST['pelajaran'];
	$nilai	= $_POST['nilai'];
	
	$sql	= "INSERT INTO siswa (nama_siswa, kelas, pelajaran, nilai) VALUES ('$nama', '$kelas', '$mapel', '$nilai')";
	
	mysqli_query($konek, $sql);
	header('location: index.php');
?>
