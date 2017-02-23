<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Besparen Home</title>
	<link href="CSS/Mobil.css" rel="stylesheet" type="text/css" />
</head>
  
<body>
	<?php 
include 'includes/header.php'; 
include 'includes/Buttons.php';
  ?>
	<!-- Main shit -->
	<div id="placeholdername">  
		<h2>Welkom op de besparingswebsite!</h2>
		<?php if(isset($_GET['msg'])){
			echo '<br><br><h4 style="text-align:center; color:blue">' . $_GET['msg'] . '</h4>';
		} ?>
	</div>
	<div id="placeholdername">
		<p>Maak een account aan om te beginnen.</p>
		<p>Heeft u al een account? Tik op het menu rechtsbovenin om verder te gaan. <br>
        Hieronder vindt u een beschrijving van alle pagina's van de website.</p>

	</div>
	<?php
		if(!isset($_SESSION['id'])){ ?>
		<div id="placeholder2"><a href="signup.php">
			<h1>REGISTREER NU OM ALLE FUNCTIES TE GEBRUIKEN</h1></a>
		</div>  
		<?php } else { ?> 	
			<div id="placeholder2">
				<h4>Als u op de optie "Bewust uitgeven" tikt kunt u berekenen hoeveel geld u maandelijks overheeft of verliest. <br> <br>
				Met de optie "Vergelijken" kunt u verschillende televisie-en internetproviders vergelijken en kijken wat het goedkoopste is. <br> <br>
				Met de optie "Handige tips" kunt u nieuwe manieren om geld te besparen vinden. <br> <br>
				Met de optie "Mijn account" kunt u uw accountgegevens bekijken.</h4>
			</div>
		<?php }
		?>
</body>
</html>