<?php
include '../koneksi.php';
$meja		= $_POST['meja'];
$item		= $_POST['item'];
$qty		= $_POST['qty'];
$dsc 		= 20;

$skl		= "SELECT price FROM item WHERE id = '$item'";
$mkl		= mysqli_query($koneksi, $skl);
if (mysqli_num_rows($mkl)>0) {
while ($lom	= mysqli_fetch_assoc($mkl)) {
	$a = $lom['price'];
	echo $a;
	}
}
$total		= $qty*$a;
$disc		= 0.2;
if ($total > 100000) {
	$hasil = $total-($total * $disc);
	echo $hasil;
}else{
	echo $total;
}

$sql		= "INSERT INTO pesanan (table_number, item_id, qty, total, diskon, after_diskon) VALUES ('$meja', '$item', '$qty', '$total', '$dsc', '$hasil')";

mysqli_query($koneksi, $sql);

header('location: index.php');