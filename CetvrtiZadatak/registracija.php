<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registracija</title>
		<link rel="stylesheet" type="text/css" href="stil.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div id="registracija">
			<form id="registracijaForma" action="#" method="POST" enctype="multipart/form-data" onSubmit="validacijaForme();">
				<table>
					<tr>
						<td><label for="name" class="labela2">Vaše ime:</label></td>
						<td><input id="name" class="input2" name="name" type="text" value="" size="30" onkeydown="validacijaTekstPolja(this.value, 'name');"/></td>
						<td class="error"><div id="greskaIme"></div></td>
					</tr>
					<tr>
						<td><label for="lastname" class="labela2">Vaše prezime:</label></td>
						<td><input id="lastname" class="input2" name="lastname" type="text" value="" size="30" onkeydown="validacijaTekstPolja(this.value, 'name');"/></td>
						<td class="error"><div id="greskaPrezime"></div></td>
					</tr>
					<tr>
						<td><label for="email" class="labela2">Vaš email:</label></td>
						<td><input id="email" class="input2" name="email" type="text" value="" size="30" onkeydown="validacijaTekstPolja(this.value, 'email');"/></td>
						<td class="error"><div id="greskaEmail"></div></td>
					</tr>
					<tr>
						<td colspan="2"><input id="submit_button"  type="button" value="Registruj se" onclick="validacijaForme();" /></td>
					</tr>
				</table>
			</form>
		</div>
		

	</body>
</html>
