<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<body>
	<center>
		<?php
			if(isset($_SESSION['id'])){
		  } else {
				if(isset($_SESSION['id'])) {
					echo "<div id='mainbtn'><a href='includes/logout.inc.php'>Uitloggen </a></div> </form>";
				} else {
					echo "<div id='mainbtn'> <a href='login.php'>Log in</a> </div>";
				} 
				if(isset($_SESSION['id'])) {
					echo "<div id='mainbtn'> Placeholder </div>";
				} else {
					echo "<div id='mainbtn'> <a href='signup.php'>Registreer</a> </div>";
				}
					echo "<div id='mainbtn'> <a href='signup.php'>Mijn Account</a> </div>";
			}
		?>
	</center>
</body>