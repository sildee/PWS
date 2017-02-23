<?php 
		error_reporting(-1);
		ini_set('error_reporting', E_ALL);
		$conn = mysqli_connect("localhost", "marnixr_pws", "Silasmeteenkanindesloot234", "marnixr_pws");
			/*if (!$conn) {
				die("Connection Error" . mysqli_connect_error());
			} 
			else { 
				echo "all good!";
			} */

	function redirect($location, $msg = "") {
		if(trim($msg) != "") {
			header("Location: ../" . $location . "?msg=" . $msg);
	  } else {
			header("Location: ../" . $location);
	  }
	}
?>