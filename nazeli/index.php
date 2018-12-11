<!DOCTYPE html>
<html>
<head>
	<title>KATERING HJ NAZELI</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
	<style type="text/css">
#main button{
	cursor: pointer;
	display: block;
	position: relative;
	top: 200px;
	margin: auto;
	border: none;
	width: 300px;
	height: 50px;
	border-radius: 10px;
	background-color: #fff; 
	transition: 0.4s;
	}
#main button a{
	margin: auto;
	text-decoration: none;
	padding: 15px 57px;
	font-size: 16px;
	color: #000;
	transition: 0.4s;
}
#main button:hover{
	background-color: #1b517c;
}
#main button a:hover{
	color: #fff;
	font-weight: bold;
}
#main #member{
	position: relative;
	top: 150px;
	background-color: #fff;
	border-radius: 20px;
	width: 600px;
	height: 600px;
	margin: auto;
	background: rgba(225,225,225,0.5);
}
#member img{
	display: block;
	margin: auto;
	padding: 10px 0px;
	width: 70%;
}
#member #member_judul{
	margin: auto;
	text-align: center;
	font-size: 36px;
	font-weight: bold;
	color: #fff;
}
#member #member_tulisan{
	background-color: #fff;
	margin: 15px 10px;
	text-transform: uppercase;
	text-align: center;
	height: 95px;
	border-bottom-left-radius: 20px;
	border-bottom-right-radius: 20px;
}
#member_tulisan a{
	position: relative;
	top: 30px;
	font-size: 26px;
	margin: auto 20px;
	padding: auto 15px;
	text-decoration: none;
	color: #1b517c;
	transition: 0.3s;
}
#member_tulisan a:hover{
	color: #64b8f4;
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
						<h1>Bergabunglah bersama kami</h1>
					</div>
				
					<div id="member_tulisan" class="clearfix">
						<a href="member/login.php">masuk</a>
						<a href="member/daftar.php">daftar sekarang</a>
					</div>
				</div>
				<button class="clearfix"><a href="admin/login.php">Masuk Sebagai Admin</a></button>
			</div>

		<!-- Footer -->
	</div>
</body>
</html>