<!DOCTYPE HTML>

<?php include 'login.php' ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kontakt</title>
		<link rel="stylesheet" type="text/css" href="stil.css">
	</head>
	<body>
		<div id="header">
			<div id="naslov">Streljački savez Bosne i Hercegovine</div>
			<div class="logo">
				<div class="logoWrap">
					<div class="logoWrap2">
						<div class="logoWrap3">
							<div class="logoWrap4">
								<div class="logoWrap5">
									<div class="logoWrap6">
										<div class="verticalLine"></div>
										<div class="horizontalLine"></div>
										<div class="logoWrap7">
											<div class="tekstLogo">SSBiH</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php if($_SESSION['logovan']=="0")
		{ ?>
			<div>
				<a class="prijava" href="prijava.php">Log in</a>
			</div>
			
			<!-- <form id="login" action="kontakt.php" method="post" accept-charset="utf-8">
				<ul>
					<li>
						<input type="username" name="username" placeholder="username" required></li>
					<li>
					<input type="password" name="password" placeholder="password" required></li>
						<li>
					<input type="submit" value="Login"></li>
					<li> <input type="hidden" value="login" name="aktivno"> </li>
				</ul>
			</form> -->
        <?php } ?>
		
		<?php if($_SESSION['logovan']=="1")
		{ ?>
			<form id="logout" action="kontakt.php" method="post" accept-charset="utf-8">
				<ul>
				<li>
					<input type="submit" value="logout"></li>
				<li> <input type="hidden" value="logout" name="aktivno"> </li>
				</ul>
			</form>
       <?php } ?>
		
		<div id="meni">
			<ul>
				<li><a href="naslovnica.php">Naslovnica</a></li>
				<li><a href="onama.php">O nama</a></li>
				<li><a href="klubovi.php">Klubovi</a></li>
				<li><a href="partneri.php">Partneri</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			</ul>
		</div>
		
		<br><br>
		<div id="novosti">
			<form id="kontaktForma" action="#" method="POST" enctype="multipart/form-data" onSubmit="validacijaForme();">
				<table>
					<tr>
						<td><label for="name" class="labela">Vaše ime:</label></td>
						<td><input id="name" class="input" name="name" type="text" value="" size="30" onkeydown="validacijaTekstPolja(this.value, 'name');"/></td>
						<td class="error"><div id="greskaIme"></div></td>
					</tr>
					<tr>
						<td><label for="email" class="labela">Vaš email:</label></td>
						<td><input id="email" class="input" name="email" type="text" value="" size="30" onkeydown="validacijaTekstPolja(this.value, 'email');"/></td>
						<td class="error"><div id="greskaEmail"></div></td>
					</tr>
					<tr>
						<td><label for="message" class="labela">Vaša poruka:</label></td>
						<td><textarea id="message" class="input" name="message" rows="7" cols="30"></textarea></td>
						<td class="error"><div id="greskaPoruka"></div></td>
					</tr>
					<tr>
						<td><label for="kodLabel" class="labela">Kod:</label></td>
						<td><label id="tekstKod" for="kodPrikaz" class="labela">ABT143CNH</label></td>
					</tr>
					<tr>
						<td><label for="kod1" class="labela">Unesite kod:</label></td>
						<td><input id="kod1" class="input" name="kodUnos" type="text" value="" size="30" onchange="validacijaTekstPolja(this.value, 'kod1');"/></td>
						<td class="error"><div id="greskaKod1"></div></td>
					</tr>
					<tr>
						<td><label for="kod2" class="labela">Potvrdite uneseni kod:</label></td>
						<td><input id="kod2" class="input" name="kodPotvrda" type="text" value="" size="30" onchange="validacijaTekstPolja(this.value, 'kod2');"/></td>
						<td class="error"><div id="greskaKod2"></div></td>
					</tr>
					<tr>
						<td colspan="2"><input id="submit_button"  type="button" value="Pošalji email" onclick="validacijaForme();" /></td>
					</tr>
				</table>
			</form>
		</div>
			
	</body>
</html>

<script src="validacijaKontakt.js"></script>