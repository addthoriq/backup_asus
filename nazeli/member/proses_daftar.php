<?php
include '../koneksi.php';

$nama	= $_POST['nama'];
$hp		= $_POST['hape'];
$mail	= $_POST['email'];
$usr	= $_POST['username'];
$pass	= $_POST['pass'];

$sql	= "INSERT INTO member (name, email, password, nomor_hp, username) VALUES ('$nama', '$mail', '$pass', '$hp', '$usr')";

mysqli_query($koneksi, $sql);
header('location: sukses.html');