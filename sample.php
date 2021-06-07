<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DMX</title>
</head>
<body>
	<form method="GET">
		<input type="text" name="person">
		<button>SUBMIT</button>
	</form>
	<?php
		$name = $_GET['person'];
		echo $name."Cool";
	?>
</body>
</html>
