<head>
	<link href="CSS/Mobil.css" rel="stylesheet" type="text/css" />
	<title> Inloggen </title>
</head>
<body>
	<?php
		include 'includes/header.php';
	?>
	<div id="Inlog">
		<?php
			if(isset($_SESSION['id'])) {
				echo 'U bent ingelogd als ' . $_SESSION['uid'];
			} else {
				echo '<h3 style="text-align:center; margin-top:90px; font-family:Arial;">U bent niet ingelogd!</h3>
					<h4 style="text-align:center; margin-top:5px; font-family:Arial">Log in om verder te gaan.</h4>';
				if(isset($_GET['msg'])) {
					echo '<br><br><h4 style="text-align:center; color:red">' . $_GET['msg'] . '</h4>';
				}
			}
		?>

		<br><br>
		<div id="regform">
			<center>
				<?php
					$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;
					if(strpos($url, 'error=empty') !== false){
						echo "Alle velden moeten ingevuld worden!";
					} elseif(strpos($url, 'error=duplicate_username') !== false) {
						echo "Deze gebruikersnaam is al in gebruik!";
					}
					if(isset($_SESSION['id'])) {
						echo "U bent al ingelogd! Klik <a href='index.php'> hier </a> om verder te gaan. <br>";
					} else {
						echo 	  "<form action='includes/login.inc.php' method='POST'> 
									<input type='text' name='uid' placeholder='Gebruikersnaam'> <br>
									<input type='password' name='upw' placeholder='Wachtwoord'> <br>
									<button type ='submit'> Log in! </button>
									</form>";
					}	
				?>
			</center> <br>
			Of klik <a href="signup.php">hier</a> om in te registreren
		</div>
	</div>
</body>
</html>