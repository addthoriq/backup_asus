<html>
	<head>
		<title>LIST DATA KELAS</title>
	</head>
	<body>
		<a href="tambah_pelajaran.php">Masukkan Data</a>
		<table border=1 cellpadding=10>
			<tr>
			<td>No</td>
			<td>Kelas</td>
			<td>Status</td>
			</tr>
			<?php
				include 'koneksi.php';
				$no			= 1;
				$scl		= "SELECT * FROM pelajaran";
				$hasil	= mysqli_query($konek, $scl);	
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
							<td>".$row['mata_pelajaran']."</td>
							<td>".jika($row['status'])."</td>
							</tr>
						";
					}
				}
			?>
		</table>
	</body>
</html>
