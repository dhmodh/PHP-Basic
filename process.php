<?php
include_once 'databaseconnection.php';
if(isset($_POST['save']))
{	 
	 $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	 $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	 $city_name = mysqli_real_escape_string($conn, $_POST['city_name']);
	 $email = mysqli_real_escape_string($conn, $_POST['email']);
	 $sql = "INSERT INTO employee (first_name,last_name,city_name,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } 
	 else {
		echo "Error: " . $sql . "
		" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>