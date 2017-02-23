<?php
 	session_start();
	include '../dbh.php';
// inkomsten
	 $loon = $_POST['loon'];
	 $bslg = $_POST['bslg'];
	 $bank = $_POST['bank'];
	 $oinkst = $_POST['oinkst'];

		$binnen = $loon + $bslg + $bank + $oinkst;
		echo $binnen . "<br>";
// uitgaven en kosten
	$huur = $_POST['huur'];
	$verz = $_POST['verz'];
	$stroom = $_POST['stroom'];  
	$gas = $_POST['gas'];
	$ovst = $_POST['ovst'];
	$bood = $_POST['bood'];
	$kppr = $_POST['kppr'];
	$odag1 = $_POST['odag1'];
	$odag2 = $_POST['odag2'];
	$over = $_POST['over'];
	
	$uit = $huur + $verz + $stroom + $gas + $ovst + $bood + $kppr + $odag1 + $odag2 + $over;
	echo $uit;
			
	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		$sql = "INSERT INTO Calc (`id`, `loon`, `bslg`, `bank`, `oinkst`, `binnen`, `huur`, `verz`, `stroom`, `gas`, `ovst`, `lbood`, `kppr`, `odag1`, `odag2`, `over`, `uit`) 
													VALUES ('$id', '$loon', '$bslg', '$bank', '$oinkst', '$binnen', '$huur', '$verz', '$stroom', '$gas', '$ovst', '$lbood', '$kppr', '$odag1', '$odag2', '$over', '$uit')";
		if ($conn->query($sql) === TRUE) {
			redirect("Calculator.php", "Uw gegevens zijn opgeslagen! Ga naar de 'Mijn Account' pagina om ze te bekijken.");
			exit;
			
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		redirect("Calculator.php", "Uw gegevens zijn opgeslagen!");

}
			} else {
						redirect("Calculator.php", "Er is een onbekende fout opgetreden.");
			}