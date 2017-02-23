<html>
 <head>
    <title>Bewust Uitgeven</title>
    <link href="CSS/Mobil.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php 
		include 'includes/header.php'; 
		include 'includes/Buttons.php';
	?>
	<div id="calculatordiv"><br><br><center>
		<div id="calculator">
			<?php 
				if(isset($_GET['msg'])) {
					echo '<br><br><h4 style="text-align:center; color:blue">' . $_GET['msg'] . '</h4> <br>';
				}
				if(isset($_SESSION['id'])) {
			?> 
			 				<p> Vul aan de linkerkant uw maandelijkse inkomsten in en aan de rechterkant uw maandelijske uitgaven en kosten. <br>
									Tik daarna op "Bereken Buffer" om uit te rekenen hoeveel geld u bespaart. <br>
									Tik op de tekst recht onder deze in plaats van op de knop om uw gegevens op te slaan. <br> <br>
			 				</p>
								
					<br><br><br>
                <form action= 'includes/savecalc.php'method='POST'> 
				 	<div id='inkomsten'><b>Inkomsten </b> <br><br>
						<input type='number' name='loon' placeholder='Loon' id='calcform'> <br>
						<input type='number' name='bslg' placeholder='Uitkering' id='calcform'> <br>
						<input type='number' name='bank' placeholder='Bank' id='calcform'> <br>
						<input type='number' name='oinkst' placeholder ='Overige inkomsten' id='calcform'> <br>
					</div> 
					<?php } ?>  
     

			<?php
				if(isset($_SESSION['id'])) {
			?> <div id='inkomsten'>
					<b>Uitgaven </b><br>
					Vaste lasten<br>
						<input type='number' name='huur' placeholder='Huur/Hypotheek' id='calcform'> <br>
						<input type='number' name='verz' placeholder='Verzekering(en)' id='calcform'> <br>
						<input type='number' name='stroom' placeholder='Stroom' id='calcform'> <br>
						<input type='number' name='gas' placeholder='Gas' id='calcform'> <br>
						<input type='number' name='ovst' placeholder='Overige vaste lasten' id='calcform'><br>
					<centre>Dagelijkse uitgaven</centre><br>
						<input type='number' name='bood' placeholder='Boodschappen (maand)' id='calcform'> <br>
						<input type='number' name='kppr' placeholder='Kapper (maand)' id='calcform'> <br>
						<input type='number' name='odag1' placeholder='Overige kosten' id='calcform'> <br>
						<input type='number' name='odag2' placeholder='Overige kosten' id='calcform'> <br>
					<centre>Incidentele uitgaven</centre><br>
						<input type='number' name='over' placeholder='Overige kosten' id='calcform'> <br>
						<button type ='submit'> Bereken buffer </button>
				</form> 
				</div> 
			<?php }
				else {
					echo "<p>Log in om de calculator te gebruiken!</p>";
				}
			?>
			 <p>
				<?php
					$loon = $_POST['loon'];
					if (isset($loon)) {
						include 'dbh.php';
							$inkomsten = $_POST['loon'] + $_POST['bslg'] + $_POST['bank'] + $_POST['oinkst'];
							$uitgaven = $_POST['huur'] + $_POST['verz'] + $_POST['stroom'] + $_POST['gas'] + $_POST['ovst'] + $_POST['bood'] + $_POST['kppr'] + $_POST['odag1'] + $_POST['odag2'] + $_POST['over'];
							$surplus = $inkomsten - $uitgaven;
					}
					else {
							include 'dbh.php';
							$inkomsten = $_POST['loon'] + $_POST['bslg'] + $_POST['bank'] + $_POST['oinkst'];
							$uitgaven = $_POST['huur'] + $_POST['verz'] + $_POST['stroom'] + $_POST['gas'] + $_POST['ovst'] + $_POST['bood'] + $_POST['kppr'] + $_POST['odag1'] + $_POST['odag2'] + $_POST['over'];
							$surplus = $inkomsten - $uitgaven;
						} 
					if($surplus > 0) {
						echo "Uw buffer is €". $surplus;
					}
					elseif ($surplus < 0) {
						$surplus = $surplus * -1;
						echo "U verliest elke maand " . $surplus . " euro, zorg dat dit wordt opgelost.<br>Klik <a href='tips.php'>hier</a> voor een aantal bespaartips";
					}


				?>
			</p>
		</div></center>
	</div>
 </body>
</html>