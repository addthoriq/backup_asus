<html>
	<head>
		<title>Input Nilai</title>
	</head>
	<body>
		<form action="nilai_tambah_proses.php" method="POST">
		<table>
			<tr>
			<td><label for="nama">Nama</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama"/></td>
			</tr>
			<tr>
			<td><label for="kelas">Kelas</label></td>
			<td>:</td>
			<td><input type="text" name="kelas" id="kelas"/></td>
			</tr>
			<tr>
			<td><label for="mapel">Mata Pelajaran</label></td>
			<td>:</td>
			<td><input type="text" name="pelajaran" id="mapel"/></td>
			</tr>
			<tr>
			<td><label for="nilai">Nilai</label></td>
			<td>:</td>
			<td><input type="text" name="nilai" id="nilai"/></td>
			</tr>
			<tr>
			<td colspan=3><input type="submit" value="KIRIM"/></td>
			</tr>
		</table>
		</form>
	</body>
</html>
