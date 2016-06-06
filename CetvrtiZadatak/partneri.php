<!DOCTYPE HTML>

<?php include 'login.php' ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Partneri streljačkog saveza BiH</title>
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
			
			<!-- <form id="login" action="partneri.php" method="post" accept-charset="utf-8">
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
			<form id="logout" action="parnteri.php" method="post" accept-charset="utf-8">
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
			<ul id="linkovi">
				<li><a href="http://www.issf-sports.org" target="_blank">ISSF</a></li>
				<li><a href="http://www.okbih.ba/new/" target="_blank">Olimpijski komitet BiH</a></li>
				<li><a href="http://www.hrvatski-streljacki.hr" target="_blank">Streljački savez Hrvatske</a></li>
				<li><a href="http://www.serbianshooting.rs" target="_blank">Streljački savez Srbije</a></li>
			</ul>
			
		</div>
			
	</body>
</html>