<html>
	<head>
		<title>Form Input Kelas</title>
	</head>
	<body>
		<form action="proses_tambah_kelas.php" method="POST">
			<table>
				<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" size=24 name="kelas"/></td>
				</tr>
				<tr>
				<td>Status</td>
				<td>:</td>
				<td><input type="radio" size=5 name=status value=1 id="aktif" /><label for="aktif">Aktif</label>
				<input type="radio" size=5 name=status value=0 id="nonaktif" /><label for="nonaktif">Tidak Aktif</label></td>
				</tr>
				<tr>
				<td><input type="submit" value="KIRIM"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
