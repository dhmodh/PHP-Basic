<?php
	session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Session</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<ul>
		<li><a href="date.php">Date</a></li>
		<li><a href="sample.php">Sample</a></li>
	</ul>
	<?php
		$_SESSION['username'] = "DMX";
		echo $_SESSION['username'];

		if(!isset($_SESSION['username'])){
			echo ""You r not logged in!!!!;
		}
		else{
			echo "You r logged in :)";
		}
	?>
</body>
</html>