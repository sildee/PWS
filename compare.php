<html>
<head>
	<link href="CSS/Mobil.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
		include 'includes/header.php';
		include 'includes/dbp.php';
		include 'includes/mobilechecker.php';	
		$ismobile = check_user_agent('mobile');
    ?>
	<div id="placeholder3">
	
		<center>Welke functies wilt u gebruiken bij uw abonement?</center><br>
			meer dan 90mbit<br><br>
			HDTV<br><br>
			Bellen<br><br>
			Mobiel<br><br>
			Video on Demand<br><br>
			lokkertje<br><br>
			spotify<br><br>
			HBO<br><br>
		<?php 
			if (!$ismobile) {
				$checkbox = "checkbox";
			}
			else {
				$checkbox = "checkboxmobile";
			}
				  
			echo 
				"<div id='$checkbox'>
					<form action='' method='post'> 
						<input type='checkbox' name='mb' value='1' id='input'><br>
						<input type='checkbox' name='HDTV' value='1' id='input'><br>
						<input type='checkbox' name='bel' value='1' id='input'><br>
						<input type='checkbox' name='mobiel' value='1' id='input'><br>
						<input type='checkbox' name='vod' value='1' id='input'><br>
						<input type='checkbox' name='lokkertje' value='1' id='input'><br>
						<input type='checkbox' name='spotify' value='1' id='input'><br>
						<input type='checkbox' name='HBO' value='1' id='input'><br>
				</div>
			<input type='submit' name='use_button' value='KLIK!' /> 
			</form>"; 

			if(isset($_POST['use_button'])) { 
					$conn = new mysqli($servername, $username, $password, $dbname);
					
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error); } 
					$mb = $_POST['mb'];	
				if (!$_POST['mb']) {$mb = 0;}
					$HDTV = $_POST['HDTV']; 
				if (!$_POST['HDTV']) {$HDTV = 0;}
					$bel = $_POST['bel']; 
				if (!$_POST['bel']) {$bel = 0;}
					$mobiel = $_POST['mobiel'];	
				if (!$_POST['mobiel']) {$mobiel = 0;}
					$vod = $_POST['vod']; 
				if (!$_POST['vod']) {$vod = 0;}
					$lokkertje = $_POST['lokkertje']; 
				if (!$_POST['lokkertje']) {$lokkertje = 0;}
					$spotify = $_POST['spotify'];	
				if (!$_POST['spotify']) {$spotify = 0;}
					$HBO = $_POST['HBO']; 
				if (!$_POST['HBO']) {$HBO = 0;}
				$sql = "SELECT id, Naam, prijs FROM Vergelijken 
						WHERE mb=$mb AND HDTV=$HDTV AND bel=$bel AND mobiel=$mobiel AND vod=$vod AND lokkertje=$lokkertje AND spotify=$spotify AND HBO=$HBO";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "id: " . $row["id"]. " - Name: " . $row["Naam"]. "<br>"; } }  
				else {
					echo "<br>er is helaas geen passend abonement bij deze specifities"; } } 

		?>
    </div>