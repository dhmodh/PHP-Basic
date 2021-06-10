<?php
	include 'includes/person.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DMX</title>
</head>
<body>
	<button>DMX</button>
	<?php 
		echo Person::$drinkingAge;
		Person::setdrinkingAge(18);
		echo Person::$setdrinkingAge;

	?>	
</body>
</html>