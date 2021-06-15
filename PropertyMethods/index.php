<?php
	include 'includes/person.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$person1 = new Person();	//Creating Method's Object
		$person1->setName("DMX");	//Accessing the Method
		echo $person1->name;

		$person2 = new Person();	//creating the Second Object
		$person2->setName("Henry");
		echo $person2->name;
	?>

</body>
</html>