<?php
	/*$satu = $_POST['angkasatu'];
	$dua = $_POST['angkadua'];
	$jawaban = $satu + $dua;

		echo "$satu + $dua = $jawaban";*/

	$nama = $_POST['nama'];
	$nilai = $_POST['nilai'];

	if (($nilai > 1) &&  ($nilai < 30)) {
		echo "Nilai dari <b>$nama</b> adalah D"; }

	elseif (($nilai > 30) &&  ($nilai < 70)) {
		echo "Nilai dari <b>$nama</b> adalah C"; }

	elseif (($nilai > 70) &&  ($nilai < 95)) {
		echo "Nilai dari $nama adalah B"; }

	elseif (($nilai > 95) &&  ($nilai < 100)) {
		echo "Nilai dari $nama adalah A"; }

	else {
		echo "Nilai kamu enggak ada, makanya belajar";}
?>
