<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DMX</title>
</head>
<body>
	<form method="GET">
		<input type="text" name="d">
		<button>Click</button>
	</form>
	<?php
		$x = $_GET['d'];
		switch ($x) {
			case 1:
				// code...
				echo "Number";
				break;

			case 2:
				// code...
				echo "hahah";
				break;

			default:
				// code...
				echo "String";
				break;
		}
	?>
</body>
</html>