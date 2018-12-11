<!-- THORIQ -->

<!-- Nomor Satu -->
<form method="post">
	<input type="text" size=30 name="satu"/>
</form>

<?php
$saya = isset($_POST['satu'])?$_POST['satu']:"";

	function ana($saya){
		$aku = $saya;
	return str_replace("aku", "saya", $aku);
	}

	if (empty($saya)){
		echo " ";
	}
	
	else {
	echo ana($saya);
	}
?>

<!-- Nomor 2 -->
<form method="post">
	<input type="text" size=30 name="angka"/>
</form>

<?php
$bil = isset($_POST['angka'])?$_POST['angka']:"";

	function angka($bil){
		$jadi = $bil;
		$input = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
		$output = array('satu ', 'dua ', 'tiga ', 'empat ', 'lima ', 'enam ', 'tujuh ', 'delapan ', 'sembilan ', 'nol ');
	return str_replace($input, $output, $jadi);
	}

if (empty($bil)){
		echo " ";
	}

else {
	echo angka($bil);
}
?>
