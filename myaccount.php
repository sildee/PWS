<head>
	<link href="CSS/Mobil.css" rel="stylesheet" type="text/css" />
	<title> Mijn Account </title>
</head>
<body>
<?php
	include 'includes/header.php';
	include 'dbh.php';
?>
<div id="Inlog">
	<center>
		<?php
		
	if(isset($_SESSION['id'])) {
		echo 'U bent ingelogd als gebruiker ' . $_SESSION['uid'] . '.<br>
					U bent gebruiker nummer ' . $_SESSION['id'] . '. <br>';
		$id = $_SESSION['id'];
		$sql = "SELECT $id FROM Calc WHERE `id` = $id";
		$result = mysqli_query($conn, $sql);
		$idcheck = mysqli_num_rows($result);
    if($idcheck > 1){
		echo "U heeft meerdere keren uw surplus berekend. Selecteer hieronder welke u wilt gebruiken (genummerd op chronologische volgorde). <br>";
		$rows = 1;
		while($rows <= $idcheck){
			echo '<a href="myaccount.php?nr=' . $rows . '">' . $rows . '</a> <br>';
			$rows++;
} 
	if(isset($_GET['nr'])){
		$nr = $_GET['nr'];
		$sql2 = "SELECT * FROM Calc WHERE `cID` = $nr";
		$result2= mysqli_query($conn, $sql2);
			while($row = mysqli_fetch_assoc($result2)){
				$surplus = $row["binnen"] - $row["uit"];
				echo "Loon: " . $row["loon"]. "<br> Uitkering: " . $row["bslg"]. "<br> Bank: " . $row["bank"]. "<br> Overige inkomsten: " . $row["oinkst"] . "<br> Totale inkomsten: " . $row["binnen"]
				. "<br> <br> Huur/Hypotheek: " . $row["huur"] . "<br> Verzekering: " . $row["verz"] . "<br> Stroom: " . $row["stroom"] . "<br> Gas: " . $row["gas"] . "<br> Overige vaste lasten: " . $row["ovst"] . "<br> Boodschappen: " . $row["lbood"] . "<br> Kapper: " . $row["kppr"] . "<br> Overige kosten: " . $row["odag1"] . "<br> Overige kosten: " . $row["odag2"] . "<br> Overige kosten: " . $row["over"] . "<br> Totale kosten en uitgaven: " . $row["uit"] . "<br> <br> Surplus: " . $surplus;
  
    }}} 
	else {
		echo "Hieronder kunt u uw uitgaven, kosten en surplus bekijken. <br> <br><br>";
		$sql2 = "SELECT * FROM Calc WHERE `id` = $id";
		$result2 = mysqli_query($conn, $sql2);
      
		if ($result2->num_rows > 0) {
			while($row = $result2->fetch_assoc()) {
				$surplus = $row["binnen"] - $row["uit"];
					echo "Loon: " . $row["loon"]. "<br> Uitkering: " . $row["bslg"]. "<br> Bank: " . $row["bank"]. "<br> Overige inkomsten: " . $row["oinkst"] . "<br> Totale inkomsten: " . $row["binnen"]
					. "<br> <br> Huur/Hypotheek: " . $row["huur"] . "<br> Verzekering: " . $row["verz"] . "<br> Stroom: " . $row["stroom"] . "<br> Gas: " . $row["gas"] . "<br> Overige vaste lasten: " . $row["ovst"] . "<br> Boodschappen: " . $row["lbood"] . "<br> Kapper: " . $row["kppr"] . "<br> Overige kosten: " . $row["odag1"] . "<br> Overige kosten: " . $row["odag2"] . "<br> Overige kosten: " . $row["over"] . "<br> Totale kosten en uitgaven: " . $row["uit"] . "<br> <br> Surplus: " . $surplus;
    }}
  }} 
	else {
		echo '<h3 style="text-align:center; margin-top:90px; font-family:Arial;">U bent niet ingelogd!</h3>
				<h4 style="text-align:center; margin-top:5px; font-family:Arial">Maak een account of log <a href="login.php">hier</a> in om verder te gaan. <h4>';
  }
?>
	</center>
</div>
</body>
