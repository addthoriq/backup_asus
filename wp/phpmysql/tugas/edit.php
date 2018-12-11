<html>
	<head>
		<title>EDIT FORM</title>
	</head>
	<body>
	<?php
	include 'koneksi.php';
	$id			= $_GET['id'];
	$sql		= "SELECT * FROM siswa where id=$id";
	$hasil	= mysqli_query($konek, $sql);
	$row		= mysqli_fetch_assoc($hasil);
	?>
		<form action="proses_edit.php" method="POST">
			<table>
				<tr>
				<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
				</tr>
				<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size=24 value="<?php echo $row['nama_siswa']; ?>" disabled></td>
				</tr>
				<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" size=5 value="<?php echo $row['kelas']; ?>" disabled></td>
				</tr>
				<tr>
				<td>Mata Pelajaran</td>
				<td>:</td>
				<td><select name="pelajaran"/>
						<option value=""><?php echo $row['pelajaran']; ?></option>
						<option value="database">Database</option>
						<option value="desain">Desain</option>
						<option value="js">Javascript</option>
						<option value="php">PHP</option>
						</select>
				</td>
				</tr>
				<tr>
				<td>Nilai</td>
				<td>:</td>
				<td><input type="text" name="nilai" size=5 value="<?php echo $row['nilai']; ?>"/></td>
				</tr>
				<tr>
				<td><input type="submit" value="KIRIM"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
