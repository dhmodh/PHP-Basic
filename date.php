<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Day</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$dayofweek = date("w");

		switch ($dayofweek) {
			case 1:
				echo "<p>It is Monday!!!!!</p>";
				break;
			case 2:
				echo "It is Tuesday!!!!!";
				break;
			case 3:
				echo "It is Wednesday!!!!!";
				break;
			case 4:
				echo "It is Thursday!!!!!";
				break;
			case 5:
				echo "It is Friday!!!!!";
				break;
			case 6:
				echo "It is Saturday!!!!!";
				break;
			case 0:
				echo "It is Sunday!!!!!";
				break;
		}
	?>
</body>
</html>