<head>
	<link href="CSS/Mobil.css" rel="stylesheet" type="text/css" />
	<?php
		if(isset($_SESSION['id'])) {
			echo '<title> Registreren </title>';
		} else {
			echo '<title> Mijn Account </title>';
		} 
	?>
</head>
<body>
	<?php
		include 'includes/header.php';
	?>
	<div id="Inlog">
		<center>
		<?php
			if(isset($_SESSION['id'])) {
				echo 'U bent ingelogd als gebruiker ' . $_SESSION['uid'] . '.<br>
					U bent gebruiker nummer ' . $_SESSION['id'] . '. <br>';
				$_SESSION['id'] = $id;
				$sql = "SELECT * FROM Calc WHERE `id` = $id";
				$result = mysqli_query($conn, $sql);
				$uidcheck = mysqli_num_rows($result);	
		} 
			else {
				echo '<h3 style="text-align:center; margin-top:90px; font-family:Arial;">U bent niet ingelogd!</h3>
					<h4 style="text-align:center; margin-top:5px; font-family:Arial">Maak een account of log <a href="login.php">hier</a> in om verder te gaan. <h4>';
			if(isset($_GET['msg'])) {
				echo '<br><br><h4 style="text-align:center; color:red">' . $_GET['msg'] . '</h4>';
		}
	}
		?>
<br><br>
	<div id="regform">
		<?php
			$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;
			if(strpos($url, 'error=empty') !== false){
				echo "Alle velden moeten ingevuld worden!";
		} 
			elseif(strpos($url, 'error=duplicate_username') !== false) {
				echo "Deze gebruikersnaam is al in gebruik!";
	}

			if(isset($id)) {
				echo  '<br>';
} 
			else {
			echo 	"<form action='includes/signup.inc.php' method='POST'> 
						<input type='text' name='uid' placeholder='Gebruikersnaam'> <br>
						<input type='text' name='firstName' placeholder='Voornaam'> <br>
						<input type='text' name='lastName' placeholder='Achternaam'> <br>
						<input type='text' name='email' placeholder='E-mailadres'> <br>
						<input type='password' name='upw' placeholder='Wachtwoord'> <br>
						<input type='password' name='verify' placeholder='Wachtwoord herhalen'> <br>
						<button type ='submit'> Registreer! </button>
					</form>";
  
	}	
		?>
		<center>
	</div>
	</div>
</body>
