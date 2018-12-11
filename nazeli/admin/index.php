<!DOCTYPE html>
<html>
<head>
	<title>ADMIN SERVER</title>
</head>
<body>
	<div id="container">
		
		<!-- SIDEBAR -->
			<div id="sidebar" class="clearfix">
				<a href="javascript:void(0)" class="closebtn" onclick="tutupNav()">&times;</a>
				<a href="kategori/index.php">kategori</a>
				<a href="notifikasi/notifikasi.php">pesan</a>
			</div>

		<!-- HEADER -->
			<div id="header" class="clearfix">
				<div id="judul" class="clearfix">
					<h1>katering hj nazeli</h1>
				</div>
				<div id="nav" class="clearfix">
					<h3>Menu</h3>
				</div>
			</div>

		<!-- Main -->
			<div id="main" class="clearfix">
			<?php
			include '../koneksi.php';
			$id 	= $_GET['id'];
			$sql	= "SELECT * FROM admin WHERE id = '$id'";
			$sumber	= mysqli_query($koneksi, $sql);
			$row	= mysqli_fetch_assoc($sumber);
			?>
				<h2>selamat datang, <?php echo $row['name'];?></h2>
				<div>
					
				</div>
			</div>

	</div>
</body>
</html>