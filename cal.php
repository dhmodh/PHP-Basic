<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
</head>
<body>
	<form>
		<input type="text" name="number1" placeholder="Enter Number 1">
		<input type="text" name="number2" placeholder="Enter Number 2">
		<select name="operator">
			<option>Addition</option>
			<option>Subtraction</option>
			<option>Multiplication</option>
			<option>Division</option>
		</select>
		<button name="submit" value="submit" type="submit">Select</button>
		
		<p>Answer</p>
	</form>
	
	<?php
		if (isset($_GET['submit'])) {
			// code...
			$result = $_GET['number1'];
			$result2 = $_GET['number2'];
			$operator = $_GET['operator'];
			switch ($operator) {
				case Addition:
					// code...
					echo $result + $result2;
					break;
				case Subtraction:
					echo $result - $result2;
					break;
				case Multiplication:
					echo $result * $result2;
					break;
				case Division:
					echo $result / $result2;
					break;
				default:
					echo "Pls. Enter Number!!!!!";
					break;
			}
		}
	?>
</body>
</html>