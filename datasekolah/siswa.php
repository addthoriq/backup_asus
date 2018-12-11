<html>
	<head>
		<title>DATA SEKOLAH</title>
	</head>
	<body>
		<center>
			<a href="siswa.php">Siswa</a>
			<a href="index.php">Nilai</a>
			<a href="kelas.php">Kelas</a>
			<a href="pelajaran.php">Mata Pelajaran</a>
		<table border=1 cellpadding=10>
			<tr>
			<td colspan=6><a href="siswa_tambah.php">Tambah Data</a></td>
			</tr>
			<tr >
				<td>No.</td>
				<td>Nomor Induk</td>
				<td>Nama Siswa</td>
				<td>Tanggal Lahir</td>
				<td>Status</td>
				<td>Action</td>
				<?php
					include 'koneksi.php';
					$no			= 1;
					$sql		= "SELECT * FROM siswa";
					$hasil	= mysqli_query($konek, $sql);
					function jika($m){
						if ($m == 1){
							return "Aktif";
						} else{
							return "Tidak Aktif";
						}
					}
					
					if (mysqli_num_rows($hasil)>0){
						while ($row = mysqli_fetch_assoc($hasil)){
							echo "<tr>
								<td>".$no++."</td>
								<td>".$row['induk']."</td>
								<td>".$row['nama_siswa']."</td>
								<td>".$row['tanggal_lahir']."</td>
								<td>".jika($row['status'])."</td>
								<td>
									<a href='edit_siswa.php?id=".$row['id']."'>Edit</a>
									<a href='delete_siswa.php?id=".$row['id']."' onclick='javascript: return confirm(\"Apakah Anda ingin menghapus Data ini?\")'>Delete Data</a>								</td>
							";}
					}
				?>
			</tr>
		</table>
		</center>
	</body>
</html>
