<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="POST" action="login.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password1">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Register</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign Up</a>
		</p>
	</form>
</body>
</html>