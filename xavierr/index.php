<html>
	<head>
		<title>XAVIERR CHATT</title>
	</head>
	<style>
		body{
			margin: 0px;
		}		
		#login{
			border: 1px solid;
			width: 300px;
			height: 500px;
			transform: translate(170%, 20%);
		}
		table{
			margin: 20px auto;
		}
	</style>
	<body>
			<div id="login">
				<form action="login.php" method="POST">
					<table border=1>
						<tr>
						<td><label for="user">Username</label></td>
						<td>:</td>
						<td><input type="text" name="user" id="user"/></td>
						</tr>
						<tr>
						<td><label for="pass">Password</label></td>
						<td>:</td>
						<td><input type="password" name="pass" id="pass"/></td>
						</tr>
						<tr>
						<td colspan=3><button type="submit" class="button_login">Login</button></td>
						</tr>
					</table>
				</form>
			</div>
	</body>
</html>
