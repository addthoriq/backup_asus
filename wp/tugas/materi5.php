<h1 style="text-align:center">Belanja di Indoapril</h1>

<table align="center">
<form action=""method="POST">

<!-- SOAL NOMOR 1 -->
	<tr>
	<td colspan=3 style="text-align:center"><b>Cek Jumlah Belanja</b></td>
	</tr>

	<tr>
	<td>Rp.</td>
	<td><input type="text" size= "20" name="belanja" id="belanja" value="<?php echo isset($_POST['belanja'])? $_POST['belanja']:0?>"/></td>
	<td><input type="submit" value="Kirim"/>
	</tr>

	<tr>
	<td colspan=3><?php
		$belanja = isset($_POST['belanja'])? $_POST['belanja']:"0";
		$harga = 30000;
		$kurang = $harga - $belanja;

			if (empty($belanja)) {
				echo "";}
			elseif ($belanja > $harga) {
				echo "Mahal woy, kurangi belanjaanmu !!!";}
			elseif ($belanja < $harga) {
				echo "Tambahin Rp.$kurang lagi woy biar pas !!!";}
			elseif ($belanja = $harga) {
				echo "BURUAN PULANG WOYY, PADA LAPER NIH !!1!1!!!1!";}
	?></td>
	</tr>

	<tr>
	<td colspan=3></td>
	</tr>
	<tr>
	<td colspan=3></td>
	</tr>

<!-- SOAL NOMOR 2 -->
	<tr>
	<td colspan=3 style="text-align:center"><b>Jumlah Diskon</b></td>
	</tr>

	<tr>
	<td>Rp.</td>
	<td><input type="text" size="20" name="harga" id="harga" value="<?php echo isset($_POST['harga'])?$_POST['harga']:0?>"/></td>
	<td><input type="submit"value="Kirim"/>
	</tr>

	<tr>
	<td colspan=3><?php
	$harga = isset($_POST['harga'])?$_POST['harga']:"0";
	$diskon = $harga * 0.175;
	$total = $harga - $diskon;

			if (empty($harga)) {
				echo "";}
			else {echo "Anda telah mendapatkan diskon.<br>Belanjaan anda menjadi Rp.$total <br>Terimakasih telah berbelanja di Indoapril :)";}
?></td>
	</tr>

	<tr>
	<td colspan=3></td>
	</tr>
	<tr>
	<td colspan=3></td>
	</tr>

<!-- SOAL NOMOR 3 -->
	<tr>
	<td colspan=3 style="text-align:center"><b>Program memunculkan karakter</b></td>
	</tr>

	<tr>
	<td colspan=2><input type="text" size=23 name="kar" id="kar" value="<?php echo isset($_POST['kar'])?$_POST['kar']:null?>"/></td>
	<td><input type="submit" name="submit" value="Kirim"/></td>
	</tr>

	<tr>
	<td colspan=3 style="text-align:center"><?php
	$kar = isset($_POST['kar']) ? $_POST['kar'] : "";
	$loop = 3;
	if (empty($kar)) {
		echo "";}
	else {
	for ($x = 0; $x < $loop; $x++) {
		for ($y = $loop; $y > $x; $y--) {
				echo "*";
				}
		for ($z = 0; $z <= $x; $z++) {
		echo $kar;
			}
		for ($w=$x; $w < $loop; $w++){
		echo "*";
		}
		echo "<br>";
		}
	}
	?></td>
	</tr>
</form>
</table>

	<br>
	<hr>
	<address style="text-align:center">Made by: addthoriq</address>
