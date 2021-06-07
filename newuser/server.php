<?php
	session_start();
	$username = "";
	$email = "";
	$error = "";

	$db = mysqli_connect('localhost','dhmodh','dishantmodh','Login');

	if(isset($_POST['register'])) {
		$username = mysqli_real_escape_string($_POST['username']);
		$email = mysqli_real_escape_string($_POST['email']);
		$password1 = mysqli_real_escape_string($_POST['password1']);
		$password2 = mysqli_real_escape_string($_POST['password2']);

		if (empty($username)) {
			array_push($error, "Username is Required");
		}
		if (empty($email)) {
			array_push($error, "Email is Required");
		}
		if (empty($Password)) {
			array_push($error, "Password is Required");
		}
		if ($password1 != $password2) {
			array_push($error, "Password didn't matched");
		}

		if (count($error) == 0) {
			$Password = md5($password1);
			$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are Logged in";
			header("Location: index.php");
		}
	}
?>