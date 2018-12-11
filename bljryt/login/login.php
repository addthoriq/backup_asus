<?php
if (isset ($_POST['input'])) {
	$user = $_POST['user'];
	$asal = $_POST['asal'];
	$hp	 = $_POST['hp'];
	$status = $_POST['status'];
	
	echo "<table><tr><td>Nama Anda</td>";
	echo "<td>:</td>";
	echo "<td><b>$user</b></td></tr>";

	echo "<tr><td>Asal Anda</td>";
	echo "<td>:</td>";
	echo "<td><b>$asal</b></td></tr>";

	echo "<tr><td>Nomor Anda</td>";
	echo "<td>:</td>";
	echo "<td><b>$hp</b></td></tr>";

	echo "<tr><td>Status Anda</td>";
	echo "<td>:</td>";
	echo "<td><b>$status</b></td></tr></table>";
}
	echo "<br>";
	echo "<a href=form.php>Kembali</a>";
?>
