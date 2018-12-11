<?php
	if ($form = $_POST['submit']){
		$nama = $_POST['nama'];
		$panggilan = $_POST['panggilan'];
		$tempat = $_POST['tempat'];
		$tgl = $_POST['tgl'];
		$bulan = $_POST['bln'];
		$tahun = $_POST['thn'];
		$alamat = $_POST['alamat'];
		$kode = $_POST['kode'];
		$nomor = $_POST['nomor'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$konfir = $_POST['konfirmasi'];

		echo "<table><tr><td>Nama Lengkap</td>";
		echo "<td>:</td><td>$nama</td></tr>";

		echo "<tr><td>Nama Panggilan</td>";
		echo "<td>:</td><td>$panggilan</td></tr>";
		
		echo "<tr><td>Tempat,Tanggal Lahir</td>";
		echo "<td>:</td>";
		echo "<td>$tempat, $tgl / $bulan / $tahun</td></tr>";
		
		echo "<tr><td>Alamat</td>";
		echo "<td>:</td>";
		echo "<td>$alamat</td></tr>";
	
		echo "<tr><td>Nomor Hape</td>";
		echo "<td>:</td>";
		switch ($kode) {
			case "966";
				echo "<td>+966$nomor</td>";
				break;
			case "62";
				echo "<td>+62$nomor</td>";
				break;
			case "81";
				echo "<td>+81$nomor</td>";
				break;
			case "60";
				echo "<td>+60$nomor</td>";
				break;

		}
		echo "</tr>";

		echo"<tr><td>Jenis Kelamin</td>";
		echo "<td>:</td>";
		switch ($gender) {
			case "laki";
			echo "<td>Laki-Laki</td>";
			case "pr";
			echo "<td>Perempuan</td></tr>";
		}

		echo "<tr><td>Email</td>";
		echo "<td>:</td>";
		echo "<td>$email</td></tr>";

		echo "<tr><td>Password</td>";
		echo "<td>:</td>";
		echo "<td>$pass</td></tr>";

		echo "<tr><td>Konfirmasi Password</td>";
		echo "<td>:</td>";
		echo "<td>$konfir</td></tr></table>";
}
?>
