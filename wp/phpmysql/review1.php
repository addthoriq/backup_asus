<table border=1>
<tbody>
<thead>
	<tr>
	<th>Nomor</th>
	<th>Merk</th>
	<th>Tipe</th>
	<th>Harga</th>
	</tr>
</thead>
</tbody>

<?php
	include 'review1_2.php';
	$nomor = 1;
	$sql = mysqli_query($koneksi, "select * from hardware where Merk='monior-samsung' || Merk='razer'");
	while ($row = mysqli_fetch_assoc($sql)){
		echo "
			<tr>
				<td>".$nomor++."</td>
				<td>".$row['merk']."</td>
				<td>".$row['tipe']."</td>
				<td>".$row['harga']."</td>
			</tr>";
	}
	
?>
</table>
