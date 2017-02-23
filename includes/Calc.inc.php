<?php 
	include '../dbh.php';
	$inkomsten = $_POST['loon'] + $_POST['bslg'] + $_POST['bank'] + $_POST['oinkst'];
	$uitgaven = $_POST['huur'] + $_POST['verz'] + $_POST['stroom'] + $_POST['gas'] + $_POST['ovst'] + $_POST['bood'] + $_POST['kppr'] + $_POST['odag1'] + $_POST['odag2'] + $_POST['over'];
	$surplus = $inkomsten - $uitgaven;
	if($surplus > 0) {
		echo "Uw buffer is €". $surplus;
	} else { 
		echo "u maakt elke dag schulden zorg dat dit wordt opgelost";
	
	}

?> 