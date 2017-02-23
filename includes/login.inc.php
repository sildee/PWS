<?php
    session_start();
	include '../dbh.php';
 
	$uid = $_POST['uid'];
	$upw = $_POST['upw'];  
	$_SESSION['uid'] = $uid;
	$sql = "SELECT * FROM user WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);  
	$row= mysqli_fetch_assoc($result);
	$hash_upw = $row['upw'];
	$hash = password_verify($upw, $hash_upw);

	if (!$hash) {
		redirect("login.php", "Gebruikersnaam en wachtwoord komen niet overeen!");
		exit;
	} else {
 		$sql = "SELECT * FROM user WHERE uid='$uid' AND upw='$hash_upw'";
		$result = mysqli_query($conn, $sql);  
		if($row = mysqli_fetch_assoc($result)) {
			$_SESSION['id'] = $row['id'];
		}
		redirect("index.php", "U bent succesvol ingelogd!");	
	}