<html>
	<head>
		<title>Safira</title>
	</head>
	<body bgcolor="powderblue">
		<center>
		<h1>Layanan Pesan Offline</h1>
		<p>Assalamu 'alaikum Safira, kamu punya pesan yang belum dibaca</p>
		<hr>
		</center>

		<center>
		<table border=1>
			<form action="" method="post">
		
				<tr>
				<td colspan=3><style="text-align:center"><b>Masukkan nama seseorang yang kamu rindukan</b></style></td>
				</tr>

				<tr>
				<td><input type="text" name="input" size=30/></td>
				<td><input type="submit" value="BUKA"/></td>
				</tr>

				<tr>
				<td colspan=2>
				<?php
				$in = isset($_POST['input'])?$_POST['input']:"";
				$a = "thoriq";
				$b = "Muhammad Rizqy Ath-Thaariq";
				$c = "Thoriq";

				if (empty($in)){
					echo "";
				}
					elseif (($in == $a)|| ($in == $c)) {
						echo "<p>Aku minta maaf udah bikin kamu kecewa, sedih, hancur moodmu dll. <br>Aku minta maaf udah ngekang kamu selama ini. Niatanku mungkin bukan untuk ngekang, tapi untuk mejagamu dan menjaga cemburu ku. Aku selama ini telah salah kepadamu. <br>Aku sadar kalo aku selalu ngelarang kamu dekat dg lawan jenis tapi aku justru yang masih dekatin cewek lain.</p>";
					}
				?>
				</td>
				</tr>

			</form>
		</table>
		</center>
	</body>
</html
