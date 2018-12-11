<html>
	<head>
		<title>LIST DATA SISWA</title>
	</head>
	<body>
		<a href="tambah.php">Masukkan Data</a>
		<table border=1 cellpadding=10>
			<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Mata Pelajaran</td>
			<td>Nilai</td>
			<td></td>
			</tr>
			<?php
				include 'koneksi.php';
				$no			= 1;
				$sql		= "SELECT * FROM siswa";
				$hasil	= mysqli_query($konek, $sql);
				
				if (mysqli_num_rows($hasil)>0){
					while ($row = mysqli_fetch_assoc($hasil)){
						echo "
							<tr>
							<td>".$no++."</td>
							<td>".$row['nama_siswa']."</td>
							<td>".$row['kelas']."</td>
							<td>".$row['pelajaran']."</td>
							<td>".$row['nilai']."</td>
							<td>
								<a href='edit.php?id=".$row['id']."'>Edit data | </a>
								<a href='delete.php?id=".$row['id']."' onclick='javascript: return confirm(\"Apakah Anda ingin menghapus Data ini?\")'>Delete Data</a>
							</td>
							</tr>
						";
					}
				}
			?>
		</table>
	</body>
</html>
