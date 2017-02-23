<!DOCTYPE html>
<?php
session_start();
error_reporting(-1);
?>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<link href="/CSS/Mobil.css" rel="stylesheet" type="text/css" />
</head>
  
<body>
	<header>
		<div id="headerlogo"> <a href="index.php"><img src="Images/Logo.png" title="Home"></a> </div>
			<div id="dropdownwrapper">
				<div id="menubox"> <img src="Images/Untitled-1.png">
					<div id="dropdownmenu">
						<a href="Calculator.php">Bewust uitgeven</a>
						<a href="compare.php">Vergelijken</a>
						<a href="tips.php">Handige tips</a> 
						<a href="myaccount.php">Mijn account</a>
						<?php 
							if ($_SESSION['id']) { echo "<a href='includes/logout.inc.php'>Uitloggen</a>"; }
							else { echo "<a href='login.php'>Inloggen</a>"; } ?>
					</div>
				 </div>
			</div>
			<nav>
				<h2>Besparen</h2>
			</nav>
	</header>
<div id="headerdiv">di</div>
<br>
</body>
</html>