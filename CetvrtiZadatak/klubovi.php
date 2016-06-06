<!DOCTYPE HTML>

<?php include 'login.php' ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Streljački klubovi u BiH</title>
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
			
			<!-- <form id="login" action="klubovi.php" method="post" accept-charset="utf-8">
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
			<form id="logout" action="klubovi.php" method="post" accept-charset="utf-8">
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
			<table id="tabelaKlubova">
				<tr>
					<th>Naziv kluba</th>
					<th>Mjesto</th>
					<th>Godina osnivanja</th>
					<th>Kontakt</th>
					<th>Web stranica</th>
				</tr>
				<tr>
					<td>Strijelac</td>
					<td>Sarajevo</td>
					<td>2013</td>
					<td>nekiMail@gmail.com</td>
					<td><a href="http://www.skvisoko.com" target="_blank">www.skstrijelacsa.ba</a></td>
				</tr>
				<tr>
					<td>Sarajevo</td>
					<td>Sarajevo</td>
					<td>1930</td>
					<td>sksarajevo@gmail.com</td>
					<td><a href="http://www.skvisoko.com" target="_blank">www.sksarajevo.ba</a></td>
				</tr>
				<tr>
					<td>Visoko</td>
					<td>Visoko</td>
					<td>1930</td>
					<td>skvisoko@gmail.com</td>
					<td><a href="http://www.skvisoko.com" target="_blank">www.skvisoko.com</a></td>
				</tr>
				<tr>
					<td>Zenica</td>
					<td>Visoko</td>
					<td>1966</td>
					<td>skvisoko@gmail.com</td>
					<td><a href="http://www.skvisoko.com" target="_blank">www.skvisoko.com</a></td>
				</tr>
				<tr>
					<td>Geofon</td>
					<td>Teslić</td>
					<td>1960</td>
					<td>skgeofon@gmail.com</td>
					<td><a href="http://www.skvisoko.com" target="_blank">www.skgeofon.com</a></td>
				</tr>
			</table>
			
		</div>
			
	</body>
</html>