<?php
 	session_start();
	include '../dbh.php';

	$uid = $_POST['uid'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
	$upw = $_POST['upw'];  
  $verify = $_POST['verify'];
	$email = $_POST['email'];
		
	if (!isset($_POST['uid']) || trim($_POST['uid']) == ""){
		redirect("signup.php", "U heeft niet alle velden ingevuld!");	
		exit;
	}
	if (!isset($_POST['upw']) || trim($_POST['upw']) == ""){
		redirect("signup.php", "U heeft niet alle velden ingevuld!");		
		exit;
	}
	if (!isset($_POST['verify']) || trim($_POST['verify']) == ""){
		redirect("signup.php", "U heeft niet alle velden ingevuld!");	
		exit;
	}
	if (!isset($_POST['email']) || trim($_POST['email']) == ""){
		redirect("signup.php", "U heeft niet alle velden ingevuld!");		
		exit;
	}
	if (!isset($_POST['lastName']) || trim($_POST['lastName']) == ""){
		redirect("signup.php", "U heeft niet alle velden ingevuld!");		
		exit;
	}
	if (!isset($_POST['firstName']) || trim($_POST['firstName']) == ""){
		redirect("signup.php", "U heeft niet alle velden ingevuld!");		
		exit;
	}
	if ($upw != $verify){
		redirect("signup.php", "De ingevoerde wachtwoorden komen niet overeen.");
		exit;
	}
    else {
		$sql = "SELECT uid FROM user WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
			
		if($uidcheck > 0) {
			redirect("signup.php", "De gekozen gebruikersnaam is al in gebruik!");
			exit;
	} 	else {
		$upwhash = password_hash($upw, PASSWORD_BCRYPT);
		$sql = "INSERT INTO user (`uid`, `upw`, `firstName`, `lastName`, `email`) 
												VALUES ('$uid', '$upwhash', '$firstName', '$lastName', '$email')";
		$result = mysqli_query($conn, $sql);  
		redirect("index.php", "Uw account is succesvol aangemaakt! Log <a href='login.php'> hier </a> in om verder te gaan.");
		exit;
	}
	}
?>