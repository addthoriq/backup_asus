<html>
	<head>
		<title>LIST DATA KELAS</title>
	</head>
	<body>
		<a href="tambah.php">Masukkan Data</a>
		<table border=1 cellpadding=10>
			<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Status</td>
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
							<td>".$row['status']."</td>
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
