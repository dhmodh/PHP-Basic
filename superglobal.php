<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SuperGlobal</title>
</head>
<body>
	<form method="GET">
		<input type="hidden" name="name" value="value">
		<button type="submit">Click</button>
	</form>
	<?php
	//Globals
		/*$x = 7;					//global var.
		function some(){
			$y = 3;				//local var.
			echo $GLOBALS['x'];	//Acces to the Global var.
		}
		some();*/

	//POST and GET
		/*echo $_GET['name'];
		echo $_POST['name'];*/
	//Cookie
		setcookie("name","DMX",time() + 250);
	//Session
		$_SESSION['name'] = "DMX";
	?>

</body>
</html>