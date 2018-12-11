<table border=1>
<tbody>
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Email</th>
		<th>Alamat Asal</th>
		<th>Action</th>
	</tr>
</thead>
</tbody>
<?php
	include 'pertama.php';
	$nomor = 1;
	$sql = mysqli_query($koneksi, "select * from data_santri");
	while ($row = mysqli_fetch_assoc($sql)) {
		echo "
			<tr>
				<td>".$nomor++."</td>
				<td>".$row['nama']."</td>
				<td>".$row['tanggal lahir']."</td>
				<td>".$row['email']."</td>
				<td>".$row['asal']."</td>
				<td>
					<a href='edit.php?id=".$row['id']."'>Edit</a> |
					<a href='hapus.php?id=".$row['id']."'>Hapus</a>
				</td>
			</tr>
		";
	}
?>
</table>
