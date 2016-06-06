<!DOCTYPE HTML>

<?php include 'login.php' ?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Detaljnije</title>
		<link rel="stylesheet" type="text/css" href="stil.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
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
			<div>
			<?php
					$veza=new PDO("mysql:dbname=wt_baza;host=localhost;charset=utf8", "admin", "admin");
					
					$id = isset($_GET['id']) ? $_GET['id'] : '';
					$action = "";
					if(isset($_POST["action"]))
						$action = $_POST["action"];
					
					
					if($action == "dodavanjeKomentara")
					{
						if(isset($_SESSION["IDkorisnika"]))
							$idKorisnika = intval($_SESSION["IDkorisnika"]);			
						else 
							$idKorisnika = 6;

						if(isset($_POST["komentar"]))
						{
							$tekstKomentara = $_POST["komentar"];

							$noviKomentar = $veza->query("insert into komentar (id, vijest, tekst, autor, vrijeme)
											values (NULL, '$id', '$tekstKomentara', 'admin', CURRENT_TIMESTAMP)");
	
						}					
					}
					
					$veza->exec("set names utf8");
					$rezultat=$veza->query("select id, naslov, tekst, FROM_UNIXTIME(UNIX_TIMESTAMP(vrijeme), '%d.%m.%Y %H:%i:%s') vrijeme2, autor, naziv_slike from vijest 
					where id='".$id."'");
					if(!$rezultat){
						$greska=$veza->errorInfo();
						print "SQL greska: ".$greska[2];
						exit();
					}
							
					foreach($rezultat as $vijest){		
						print "<div class='novostDetaljno'>
									<div class='naslovNovosti'>".$vijest['naslov']."</div>
									<img class='slikaNovosti' src='Slike/".$vijest['naziv_slike']."' alt='Bh strijelci'>
									<p class='tekst'>".$vijest['tekst']."</p>
									<p class='autor'>Autor: ".$vijest['autor']."</p>
									<p id='datum12' class='datum'>".$vijest['vrijeme2']."</p>
								</div>";
					}
					
					$rezultat1=$veza->query("select count(*) broj from komentar where vijest='".$id."'");
					foreach ($rezultat1 as $red) {
						if($red['broj']!=0)
						{
							echo '<a href="#" onclick="OtvaranjeKomentara('.$id.')">'.$red['broj'].'komentara</a>';
						}
						else
							echo "<small>Nema komentara</small>";
					}
					
					$komentari = $veza->query("select k.id, k.tekst, FROM_UNIXTIME(UNIX_TIMESTAMP(k.vrijeme), '%d.%m.%Y %H:%i:%s') vrijeme,
					k.autor from komentar k join vijest v on k.vijest=v.id where k.vijest='".$id."'");
					foreach ($komentari as $kom) {
						print "<div class='komentar'>
									<p class='tekst'>".$kom['tekst']."</p>
									<p class='autor'>Autor: ".$kom['autor']."</p>
									<p id='datum12' class='datum'>".$kom['vrijeme']."</p>
								</div>";
					}

				?>
			
				
				<?php if($_SESSION['logovan']=="1")
				{ ?>
				</br>
				<form action="detaljnijeVijest.php?id=<?= $id ?>" method="post">
					<table id="formaZaDodavanjeKomentara">
						<tr>
							<td>Unesite Vaš komentar:</td>
							<td><textarea class="komentarBox" id="komentar" name="komentar" placeholder="Vaš komentar..."></textarea></td>
						</tr> 
						<tr>
							<td></td>
							<td><input type="submit" value="Komentariši">
							<input type="hidden" name="action" value="dodavanjeKomentara"></td>
						</tr>
					</table>
				</form>
				
				<?php } ?>
			</div>
		</div>
	</body>
</html>

<script src="komentari.js"></script>