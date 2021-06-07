<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Define</title>
</head>
<body>
	
	<form method="GET">
		<input type="text" name="x" placeholder="For x">
		<br>
		<input type="text" name="a" placeholder="For a">
		<button>Submit</button>
	</form>
	<?php
		include 'date.php';
	?>
	<?php
		function newCalc($x){
			$newnumber = $x * 0.75;
			echo "Here is 75%....:- ".$newnumber;
		}
		$x = $_GET['x'];
		newCalc($x);
		echo "<br>";
		$a = $_GET['a'];
		newCalc($a);
	?>

</body>
</html>