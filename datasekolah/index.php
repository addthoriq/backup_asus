<html>
	<head>
		<title>DATA NILAI SISWA</title>
	</head>
	<body>
		<center>
			<a href="siswa.php">Siswa</a>
			<a href="index.php">Nilai</a>
			<a href="kelas.php">Kelas</a>
			<a href="pelajaran.php">Mata Pelajaran</a>
		<table border=1 cellpadding=10>
			<tr>
			<td colspan=6><a href="nilai_tambah.php">Tambah Data</a></td>
			</tr>
			<tr >
				<td>No.</td>
				<td>Nama Siswa</td>
				<td>Kelas</td>
				<td>Mata Pelajaran</td>
				<td>Nilai</td>
				<td>Action</td>
				<?php
					include 'koneksi.php';
					$no			= 1;
					$shl		= "SELECT * FROM nilai";
					$hasil	= mysqli_query($konek, $shl);
					
					if (mysqli_num_rows($hasil)>0){
						while ($row = mysqli_fetch_assoc($hasil)){
							echo "<tr>
								<td>".$no++."</td>
								<td>".$row['id_induk']."</td>
								<td>".$row['id_kelas']."</td>
								<td>".$row['id_pelajaran']."</td>
								<td>".$row['nilai']."</td>
								<td>
									<a href='edit_nilai.php?id=".$row['id']."'>Edit</a>
									<a href='delete_nilai.php?id=".$row['id']."' onclick='javascript: return confirm(\"Apakah Anda ingin menghapus Data ini?\")'>Delete Data</a>								</td>
							";}
					}
				?>
			</tr>
		</table>
		</center>
	</body>
</html>
