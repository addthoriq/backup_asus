<html>
	<head>
		<title>Input Data Siswa</title>
	</head>
	<body>
		<form action="siswa_tambah_proses.php" method="POST">
		<table>
			<tr>
			<td><label for="induk">Nomor Induk</label></td>
			<td>:</td>
			<td><input type="text" name="induk" id="induk"/></td>
			</tr>
			<tr>
			<td><label for="nama">Nama</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama"/></td>
			</tr>
			<tr>
			<td><label for="tgl">Tanggal Lahir</label></td>
			<td>:</td>
			<td><input type="text" name="tanggal" id="tgl" placeholder="ex: 1999-12-31"/></td>
			</tr>
			<tr>
			<td><label for="pass">Password</label></td>
			<td>:</td>
			<td><input type="password" name="password" id="pass"/></td>
			</tr>
			<tr>
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
