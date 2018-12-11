<html>
	<head>
		<title>Input Data Siswa</title>
	</head>
	<body>
		<form action="kelas_tambah_proses.php" method="POST">
		<table>
			<tr>
			<td><label for="kelas">Kelas</label></td>
			<td>:</td>
			<td><input type="text" name="kelas" id="kelas"/></td>
			</tr>
			<td><label for="status">Status</label></td>
			<td>:</td>
			<td><input type="radio" name="status" value="1" id="aktif"/><label for="aktif">Aktif</label>
			<input type="radio" name="status" value="0" id="nonaktif"/><label for="nonaktif">Tidak Aktif</label>
			</td>
			</tr>
			<tr>
			<td colspan=3><input type="submit" value="KIRIM"/></td>
			</tr>
		</table>
		</form>
	</body>
</html>
