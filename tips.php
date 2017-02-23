<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="scripts/script.js"></script>
	<meta name="viewport" content="width=device-width">
	<title>Besparen Home</title>
	<link href="CSS/Mobil.css" rel="stylesheet" type="text/css" />
</head>
  
<body>
	<?php 
		include 'includes/header.php'; 
		include 'includes/Buttons.php';
		include 'includes/mobilechecker.php';
	?>
	<!-- Main shit -->
	<div id="placeholdername">  
		<h2>Handige Tips</h2>
		<?php if(isset($_GET['msg'])){
			echo '<br><br><h4 style="text-align:center; color:blue">' . $_GET['msg'] . '</h4>';
		} ?>
	</div>
	<div id="tipsmain1">
		<center><div id="tips1">
			<input type="button" value="Huishoudelijk" onClick="showhide1(1)">
			<div id="1" style="display:none;"><div id="placeholder4"><br>
				Koop huismerk in plaats van merkproducten om niet te veel op te geven maar alsnog te besparen.<br><br>
				Bekijk of je nog abonementen hebt op kranten of tijdschriften en kijk of je ze nog wel leest en gebruikt. Er staan heel veel gratis vervangende websites online<br><br>
				Zorg ervoor dat je in 1 keer je boodschappen haalt. Zo haal je meestal minder onnodige snacks in huis. <br><br>
			</div></div> <br> <br>

			<input type="button" value="Incidenteel" onClick="showhide1(2)">
			<div id="2" style="display:none;"><div id="placeholder4"><br> 
				Bedenk of je het product wat je wil kopen wel echt nodig hebt.<br><br>
				Heb je een product in de winkel gezien, kijk dan eerst even op internet of je het goedkoper kunt kopen. <br><br>
			</div></div> <br> <br>

			<input type="button" value="Lange termijn" onClick="showhide1(3)">
			<div id="3" style="display:none;"><div id="placeholder4"><br>
				Stel spaardoelen voor jezelf<br><br>
				Krijg inzicht in de inkomsten en uitgaven per maand. Zo kun je makkelijker een realistisch doel stellen.<br><br>
				Maak je niet druk om of iets in de mode is of niet. Als kleding uit de mode is dan is het een stuk goedkoper. <br><br> 
			</div></div><br><br>
	</div></center>
</body>
</html>