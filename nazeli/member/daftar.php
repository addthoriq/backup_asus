<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MEMBER</title>
	<link rel="stylesheet" type="text/css" href="../gaya.css">
	<style type="text/css">
#main #member{
	position: relative;
	top: 90px;
	background-color: #fff;
	border-radius: 20px;
	width: 600px;
	height: 835px;
	margin: auto;
	background: rgba(225,225,225,0.6);
}
#member img{
	display: block;
	margin: auto;
	padding: 10px 0px;
	width: 20%;
}
#member #member_judul{
	font-size: 36px;
	font-weight: bold;
	color: #fff;
	text-align: center;
	margin: 20px auto;
}
#member #kiri{
	position: relative;
	top: 10px;
	text-align: center;
	color: #fff;
	margin: 20px 0px;
	padding-bottom: 10px;
	font-size: 36px;
}
#kiri h3{
	margin: 10px 0px;
}
#kiri input{
	border: none;
	border-radius: 5px;
	width: 300px;
	height: 30px;
	font-size: 28px;
}
#member #member_tulisan{
	position: relative;
	top: 30px;
	background-color: #fff;
	margin: 15px 10px;
	text-transform: uppercase;
	height: 95px;
	border-bottom-left-radius: 20px;
	border-bottom-right-radius: 20px;
}
#member_tulisan a{
	position: relative;
	top: 50px;
	right: 30px;
	font-size: 14px;
	margin: auto 20px;
	padding: auto 15px;
	text-decoration: none;
	color: #1b517c;
	transition: 0.3s;
}
#member_tulisan a:hover{
	color: #64b8f4;
}
#member_tulisan button{
	background-color: #1b517c;
	position: relative;
	right: 130px;
	border-radius: 5px;
	cursor: pointer;
	border: 1px solid;
	margin: 10px auto;
	padding: 10px 110px;
	font-size: 16px;
	color: #fff;
	transition: 0.5s;
}
#member_tulisan button:hover{
	background-color: #fff;
	color: #1b517c;
	border: 1px solid;
	border-color: #1b517c;
}

	</style>
</head>
<body>
	<div id="container">

		<!-- HEADER -->
			<div id="header" class="clearfix">
				<h1>katering hj nazeli</h1>
			</div>

		<!-- Main -->
			<div id="main" class="clearfix">

				<div id="member" class="clearfix">
					<img src="https://www.dsaa.org/get/files/image/galleries/memberIcon-0001.png?500x500">
				
					<div id="member_judul" class="clearfix">
						<h1>Silahkan Daftar</h1>
					</div>

					<div id="kiri">
						<form action="proses_daftar.php" method="POST">
							<h3>Nama</h3>
							<input type="text" name="nama">
							<h3>Nomor Hp</h3>
							<input type="text" name="hape">
							<h3>Email</h3>
							<input type="text" name="email">
							<h3>Username</h3>
							<input type="text" name="username">
							<h3>Password</h3>
							<input type="password" name="pass">				
					<div id="member_tulisan" class="clearfix">
						<a href="../index.php">Kembali ke Halaman utama</a>
						<button type="submit" class="clearfix">Login</button>
					</div>
						</form>
					</div>
				</div>
			</div>

		<!-- Footer -->
	</div>
</body>
</html>