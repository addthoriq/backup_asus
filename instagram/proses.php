<?php
	include 'konek.php';
	$user = $_POST['user'];
	$password = $_POST['password'];

	$sql = "insert into instagram (user,password) value ('$user','$password')";
	mysqli_query($connect,$sql);

	header('location:index.php')
?>