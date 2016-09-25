<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>ASU Capstone Portal</title>
</head>
<body>

<div>
	<form action="login_user.php" method="post">
		Email
		<input type="text" name="email">
		Password
		<input type="password" name="password">
		<input type="submit" name="Login">
	</form>
</div>

<div id="register_form">
	<form action="register_user.php" method="post">
		ASURITE
		<input type="text" name="asurite">
		Name
		<input type="text" name="name">
		Email
		<input type="text" name="email">
		Password
		<input type="password" name="password">
		<input type="submit" name="Register">
	</form>
</div>

</body>
</html>