<!DOCTYPE HTML>

<?php include 'login.php' ?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Streljački savez BiH</title>
		<link rel="stylesheet" type="text/css" href="stil.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body onload="datum()">
		<div id="header">
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
			<div id="naslov">Streljački savez Bosne i Hercegovine</div>
		</div>
		
		<?php if($_SESSION['logovan']=="0")
		{ ?>
			<div>
				<a class="prijava" href="prijava.php">Log in</a>
			</div>
			
			<!-- <form id="login" action="naslovnica.php" method="post" accept-charset="utf-8">
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
			<form id="logout" action="naslovnica.php" method="post" accept-charset="utf-8">
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
				<li><a href="onama.html">O nama</a></li>
				<li><a href="klubovi.html">Klubovi</a></li>
				<li><a href="partneri.html">Partneri</a></li>
				<li><a href="kontakt.html">Kontakt</a></li>
			</ul>
			
		</div>

		<br><br>
		<div id="novosti" >
			<h3>NOVOSTI</h3>
			<ul class="listaVijesti">
				<li onmousedown="prikaziDanasnjeVijesti();">Danasnje novosti</li>
				<li>Ovosedmicne novosti</li>
				<li onmousedown="prikaziOvomjesecneVijesti();">Ovomjesecne novosti</li>
				<li onmousedown="prikaziSveVijesti();">Sve novosti</li>
			</ul>
			<br>
			<div class="novost1">
				<div class="naslovNovosti">Bosansko-hercegovački strijelci napreduju na svjetskim rang listama</div>
				<img class="slikaNovosti" src="Slike/issf_logo.jpg" alt="ISSF">
				<p class="tekst">U najnovijem ažuriranju svjetske streljačke rang liste objavljene od strane ISSF, bosansko-hercegovački strijelci su napredovali za nekoliko pozicija...</p>
				<p id="datum1" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost2">
				<div class="naslovNovosti">Održano drugo kolo Premijer Lige BiH</div>
				<img class="slikaNovosti" src="Slike/strijelac1.jpg" alt="Bh strijelac">
				<p class="tekst">Danas je u Zenici održano drugo kolo Premijer Lige BiH na kojem je učestvovalo više od 80 strijelaca iz čitave Bosne i Hercegovine...</p>
				<p id="datum2" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost1">
				<div class="naslovNovosti">Održano sastanak sa OKBiH i firmom ZOI84</div>
				<img class="slikaNovosti" src="Slike/zastave_novo.jpg" alt="Zastave">
				<p class="tekst">Danas je u Sarajevu održan sastanak streljačkog saveza BiH kao i entitetskih streljačkih saveza sa Olimpijskkim komitetom BiH i firmom ZOI84, u cilju dogovora oko korištenja streljane u olimpijskoj dvorani Zetra...</p>
				<p id="datum3" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost2">
				<div class="naslovNovosti">Održano prvo kolo Premijer Lige BiH</div>
				<img class="slikaNovosti" src="Slike/slika.jpg" alt="Bh strijelci">
				<p class="tekst">Danas je u Visokom održano prvo kolo Premijer Lige BiH na kojoj su učestvovali strijelci iz svih klubova u Bosni i Hercegovini gdje su oboreni novi državni rekordi i ostvareni mnogi zapaženi rezultati...</p>
				<p id="datum4" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost1">
				<div class="naslovNovosti">Takmičenje u Minhenu</div>
				<img class="slikaNovosti" src="Slike/petar.jpg" alt="Bh strijelci">
				<p class="tekst">Od danas do 31. januara srpski strelci gađaju na veoma jakom turniru u Nemačkoj. Naši mogu da osvoje još jednu "mušku" OI kvotu u disciplini vazdušni pištolj...</p>
				<p id="datum5" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost2">
				<div class="naslovNovosti">Bosansko-hercegovački reprezentativci se vratili iz Kuvajta</div>
				<img class="slikaNovosti" src="Slike/reprezentacija.jpg" alt="Bh strijelci">
				<p class="tekst">Bosansko-hercegovački reprezentativci su se jučer vratili iz Kuvajte gdje se održao turnir HH The Amir of Kuwait International Shooting Grand Prix i sa sobom donijeli srebrenu medalju...</p>
				<p id="datum6" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost1">
				<div class="naslovNovosti">Održano kolo Lige BiH za kadete</div>
				<img class="slikaNovosti" src="Slike/streljastvo-visoko-sk-visoko.png" alt="Bh strijelci">
				<p class="tekst">Danas je u Visokom održano prvo kolo Premijer Lige BiH za kadete na kojoj su učestvovali strijelci iz svih klubova u Bosni i Hercegovini gdje su oboreni novi državni rekordi...</p>
				<p id="datum7" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost2">
				<div class="naslovNovosti">Streljački klub Geofon prima mlade strijelce</div>
				<img class="slikaNovosti" src="Slike/emma.jpg" alt="Bh strijelci">
				<p class="tekst">Ukoliko ste zainteresovani za karijeru u sportskom streljaštvu, streljački klub Geofon iz Teslića poziva sve mlade da se jave na email streljačkog kluba Geofon...</p>
				<p id="datum8" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost1">
				<div class="naslovNovosti">Antidoping agencija objavila rezultate testova</div>
				<img class="slikaNovosti" src="Slike/antidoping.jpg" alt="Bh strijelci">
				<p class="tekst">Danas je Agencija za antidoping kontrolu Bosne i Hercegovine objavila rezultate antidoping testova sportista koji su obavljeni u prethodnom periodu. Drago nam je objaviti...</p>
				<p id="datum9" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost2">
				<div class="naslovNovosti">Zabrana korištenja strelišta u Zetri</div>
				<img class="slikaNovosti" src="Slike/vucko.png" alt="Bh strijelci">
				<p class="tekst">"Nakon neshvatljive samovolje direktora ZOI'84 g. Hubijara da vrhunskim klubovima zabrani upotrebu strelišta u Zetri primorani smo odgoditi održavanje Međunarodnog streljačkog šestoaprilskog turnira...</p>
				<p id="datum10" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost1">
				<div class="naslovNovosti">Kandidati za OI Rio2016</div>
				<img class="slikaNovosti" src="Slike/Rio.png" alt="Bh strijelci">
				<p class="tekst">Predstavljamo vam kandidate za ljetne olimpijske igre, koji su svojim trudom i zalaganjem osigurali svoja mjesta na olimpijskim igrama koje će se održati 2016. godine...</p>
				<p id="datum11" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
			<div class="novost2">
				<div class="naslovNovosti">Pogledajte strelišta širom Bosne i Hercegovine</div>
				<img class="slikaNovosti" src="Slike/streljana.jpg" alt="Bh strijelci">
				<p class="tekst">Predstavljamo vam galeriju slika svih strelišta u Bosni i Hercegovini kako bismo ukazali na (ne)ulaganje u iste. Pored toga pogledajte i strelišta širom svijeta...</p>
				<p id="datum12" class="datum"></p>
				<input class="dugmeVidiVise" type="button" value="Vidi više" onclick="location.href='#header'"/>
			</div>
		</div>
			
	</body>
</html>

<script src="vrijemeNovosti.js"></script>