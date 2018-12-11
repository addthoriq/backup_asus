<html>
	<head>
		<title>FORM BIODATA SISWA</title>
		<link rel="shortcut icon" href="logoah.jpg"/> <!-- Gambar Icons -->
		<link/> <!-- Manggil CSS -->
		<style>
			.kotak{
				margin:auto;
				margin-top:20px;
			}
			.ah{
				width:100px;
				margin-bottom:5px;
			}
			#mts{
				width:125px;
			}
			.tengah{
				background-color: #f4f4f4;
			}
			.form{
				margin-top:10px;
				width:50px;
				border:1px solid;
				border-color:#ededed;
				background-color: #ffffff;
			}
			.judul{
				font:24px Verdana;
			}
			.tombol{
			width: 100px;
			height: 25px;
			background-color: #32bc40;
			color: #ffffff;
			margin-bottom: 15px;
			}
			#hapus{
			background-color: #d12e2e;
			color: #ffffff;
			}
		</style>
	</head>
	<body>
		<center>
		<div class="kotak">
			<img src="logosma.JPG" class="ah" id="sma"/>
			<img src="logomts.jpg" class="ah" id="mts"/>
			<img src="logoah.jpg" class="ah" id="pp"/>
			<br><p>SMAIT Al Hikmah MTsT Al Hikmah Ponpes IT Al Hikmah</p>
		</div>
		<div class="tengah">
			<hr>
			<h2>PENDAFTARAN SANTRIWAN DAN SANTRIWATI PONPES IT AL HIKMAH</h2>
			<form action="proses.php" method="POST">
				<table class="form">
				<?php
	$nmleng = $_POST['namaLengkap'];
	$nmpang = $_POST['namaPanggilan'];
	$alamat = $_POST['alamat'];
	$tempat = $_POST['tempat'];
	$tgl		= $_POST['tgl'];
	$jkl		= $_POST['jkl'];
	$agama	= $_POST['agama'];
	$negara	= $_POST['negara'];
	$anak		= $_POST['anak'];
	$sodara = $_POST['sdr'];
	$kot		= $_POST['kot'];
	$asal		= $_POST['asalSekolah'];
	$skl		= $_POST['jenjang'];

		echo	 "<tr>";
		echo	 "<td colspan=4 style="text-align:center"><b class="judul">Keterangan Diri Siswa</b></td>";
						</tr>

						<tr>
						<td>1.</td>
						<td><label for="namaleng">Nama Lengkap</label></td>
						<td>:</td>
						<td><input type="text" size=30 name="namaLengkap" class="kolom" id="namaleng"/></td>
						</tr>

						<tr>
						<td>2.</td>
						<td><label for="namapang">Nama Panggilan</label></td>
						<td>:</td>
						<td><input type="text" size=30 name="namaPanggilan" class="kolom" id="namapang"/></td>
						</tr>

						<tr>
						<td>3.</td>
						<td><label for="alamat">Alamat</label></td>
						<td>:</td>
						<td><textarea name="alamat" class="kolom" id="alamat"></textarea></td>
						</tr>

						<tr>
						<td>4.</td>
						<td><label for="tempat">Tempat, Tanggal Lahir</label></td>
						<td>:</td>
						<td><input type="text" size=15 name="tempat" class="kolom" id="tempat"/> , <input type="date" nama="tgl"/>
						</td>
						</tr>

						<tr>
						<td>5.</td>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input type="radio" name="jkl" id="laki" value="laki"/>
						<label for="laki">Laki-Laki</label>
						<input type="radio" name="jkl" id="pr" value="pr"/>
						<label for="pr">Perempuan</label>
						</td>
						</tr>

						<tr>
						<td>6.</td>
						<td>Agama</td>
						<td>:</td>
						<td><select name="agama" id="agama"/>
								<option value="">--Pilih Agama--</option>
								<option value="islam">Islam</option>
								<option value="kristen">Kristen</option>
								<option value="katolik">Katolik</option>
								<option value="budha">Budha</option>
								<option value="konghucu">Konghucu</option>
								<option value="hindu">Hindu</option>
     						</select>
						</td>
						</tr>

						<tr>
						<td>7.</td>
						<td><label for="negara">Kewarganegaraan</label></td>
						<td>:</td>
						<td><input type="text" size=30 name="negara" class="kolom" id="negara"/>
						</td>
						</tr>

						<tr>
						<td>8.</td>
						<td><label for="anak">Anak ke</label></td>
						<td>:</td>
						<td><input type="text" size=5 name="anak" class="kolom" id="anak"/>
						<label for="sdr">, dari </label>
						<input type="text" size=5 name="sdr" class="kolom" id="sdr"/> Saudara
						</td>
						</tr>

						<tr>
						<td>9.</td>
						<td>Keadaan Orang Tua</td>
						<td>:</td>
						<td><input type="radio" name="kot" class="kot" id="masih"/>
						<label for="masih">Masih Hidup</label>
						<input type="radio" name="kot" class="kot" id="yatim"/>
						<label for="yatim">Yatim</label>
						<input type="radio" name="kot" class="kot" id="piatu"/>
						<label for="piatu">Piatu</label>
						<input type="radio" name="kot" class="kot" id="yp"/>
						<label for="yp">Yatim Piatu</label>
						</td>
						</tr>

						<tr>
						<td>10.</td>
						<td><label for="asalskl">Asal Sekolah</label></td>
						<td>:</td>
						<td><input type="text" size=30 name="asalSekolah" class="kolom" id="asalskl"/>
						</td>
						</tr>

						<tr>
						<td>11.</td>
						<td><label for="jenjang">Jenjang Pendidikan<br>Selanjutnya</label></td>
						<td>:</td>
						<td><select name="jenjang" class="kolom" id="jenjang"/>
								<option value="">---Pilih Jenjang---</option>
								<option value="mtst">MTsT Al Hikmah</option>
								<option value="smait">SMA IT Al Hikmah</option>
						</td>
						</tr>

						<tr>
						<td colspan=3></td>
						<td><button class="tombol" name="tombol" value="kirim">KIRIM</button>
						<button type="reset" class="tombol" id="hapus" name="hapus" value="hapus">RESET</button>
						</td>
						</tr>"
?>
				</table>
			</form>
		</div>
		</center>
	</body>
</html>
