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
				<li><a href="onama.php">O nama</a></li>
				<li><a href="klubovi.php">Klubovi</a></li>
				<li><a href="partneri.php">Partneri</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
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
			
			<div>
				<?php
					$veza=new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "admin", "admin");
					$veza->exec("set names utf8");
					$rezultat=$veza->query("select id, naslov, tekst, FROM_UNIXTIME(UNIX_TIMESTAMP(vrijeme), '%d.%m.%Y %H:%i:%s') vrijeme2, autor, naziv_slike from vijest order by vrijeme desc");
					if(!$rezultat){
						$greska=$veza->errorInfo();
						print "SQL greska: ".$greska[2];
						exit();
					}
					$i=1;
					$j=2;
					foreach($rezultat as $vijest){
						$id=$vijest['id'];
						if($i % $j === 0)
							print "<div class='novost2php'>
										<div class='naslovNovosti'>".$vijest['naslov']."</div>
										<img class='slikaNovosti' src='Slike/".$vijest['naziv_slike']."' alt='Bh strijelci'>
										<p class='tekst'>".$vijest['tekst']."</p>
										<p class='autor'>Autor: ".$vijest['autor']."</p>
										<p id='datum12' class='datum'>".$vijest['vrijeme2']."</p>
										<a href='detaljnijeVijest.php?id=".$id."'>Vidi više</a>
								</div>";
						else
							print "<div class='novost1php'>
										<div class='naslovNovosti'>".$vijest['naslov']."</div>
										<img class='slikaNovosti' src='Slike/".$vijest['naziv_slike']."' alt='Bh strijelci'>
										<p class='tekst'>".$vijest['tekst']."</p>
										<p class='autor'>Autor: ".$vijest['autor']."</p>
										<p id='datum12' class='datum'>".$vijest['vrijeme2']."</p>
										<a href='detaljnijeVijest.php?id=".$id."'>Vidi više</a>
								</div>";
						$i = $i + 1;
					}
				?>
			</div>
		</div>
			
	</body>
</html>

<script src="vrijemeNovosti.js"></script>