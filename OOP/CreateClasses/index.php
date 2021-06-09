<?php
	include 'includes/newclass.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php
		$object = new NewClass;
		unset($object);					//Deleting the Object
		echo $object->getProperty();
	?>

</body>
</html>