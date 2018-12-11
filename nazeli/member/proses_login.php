<?php
include '../koneksi.php';

$usr	= $_POST['username'];
$pass	= $_POST['pass'];

$sql	= "SELECT * FROM member";
$mcl	= mysqli_query($koneksi, $sql);
$row	= mysqli_fetch_assoc($mcl);

if ($usr == $row['username'] && $pass == $row['password']) {
	header('location: home.php');
}else{
	header('location: login_salah.php');
}