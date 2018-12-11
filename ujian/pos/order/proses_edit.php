<?php
include '../koneksi.php';
$id 		= $_POST['id'];
$meja		= $_POST['meja'];
$item		= $_POST['item'];
$qty		= $_POST['qty'];
$qms 		= $_POST['harga'];
$dsc 		= 20;
$total		= $qty * $qms;

$disc		= 0.2;
if ($total > 100000) {
	$hasil = $total-($total * $disc);
	echo $hasil;
}else{
	echo $total;
}

$sql		= "UPDATE pesanan SET table_number = '$meja', item_id = '$item', qty = '$qty', total = '$total', diskon = '$dsc', after_diskon = '$hasil' WHERE id = '$id'";

mysqli_query($koneksi, $sql);

header('location: index.php');