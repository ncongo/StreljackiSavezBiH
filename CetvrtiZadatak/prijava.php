<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Prijava</title>
		<link rel="stylesheet" type="text/css" href="stil.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div id="prijava">

			<form id="login" action="naslovnica.php" method="POST" accept-charset="utf-8" >
				<table>
					<tr>
						<td><label for="username" class="labela2">Korisničko ime:</label></td>
						<td><input id="username" class="input2" name="username" type="username" placeholder="username" required/></td>
					</tr>
					<tr>
						<td><label for="sifra" class="labela2">Šifra:</label></td>
						<td><input id="sifra" class="input2" name="password" type="password" placeholder="password" required/></td>
					</tr>
					<tr>
						<td colspan="2"><input id="submit_button" type="submit" value="Login" /></td>
					</tr>
					<li> <input type="hidden" value="login" name="aktivno">
				</table>
				<a id="registrujSe" href="registracija.html">Registruj se</a>
			</form>


		</div>
		

	</body>
</html>
