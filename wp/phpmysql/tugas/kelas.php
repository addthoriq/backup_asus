<html>
	<head>
		<title>LIST DATA KELAS</title>
	</head>
	<body>
		<a href="tambah_kelas.php">Masukkan Data</a>
		<table border=1 cellpadding=10>
			<tr>
			<td>No</td>
			<td>Kelas</td>
			<td>Status</td>
			</tr>
			<?php
				include 'koneksi.php';
				$no			= 1;
				$skl		= "SELECT * FROM kelas";
				$hasil	= mysqli_query($konek, $skl);	
				function jika($m){
						if ($m == 1){
							return "Aktif";
						}
						else {
							return "Tidak Aktif";
						}
					};
										
				if (mysqli_num_rows($hasil)>0){
					while ($row = mysqli_fetch_assoc($hasil)){
						echo "
							<tr>
							<td>".$no++."</td>
							<td>".$row['nama_kelas']."</td>
							<td>".jika($row['status'])."</td>
							</tr>
						";
					}
				}
			?>
		</table>
	</body>
</html>
