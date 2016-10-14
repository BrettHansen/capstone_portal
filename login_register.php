<?php
require('includes/config.php');
$db = new Database();
$nameError = false;
$passwordError = false;
$nameExistsError = false;

// Handle logins
if($_POST['action'] == 'login') {
	$email	= $_POST['email'];
	$password	= $_POST['password'];

	// TO DO - Validate email as valid

	// Check if user exists and then if the password is correct
	// Without both, throw an error. Otherwise let them in
	$result = $db->query("SELECT * FROM users WHERE email = '{$email}'");
	if(count($result) == 0) {
		$nameError = true;
	}
	else if(!password_verify($password, $result[0]['password'])) {
		$passwordError = true;
	}
	else {
	    session_start();
		$_SESSION['user_id'] = $result[0]['id'];
		$_SESSION['user_role'] = $result[0]['role'];
		redirect('dashboard.php');
	}
}

// Handle registration
else if($_POST['action'] == 'register') {
	$asurite 	= $_POST['asurite'];
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$password	= $_POST['password'];

	// TO DO - validate all fields

	// Clean input
	$asurite = 	$db->clean($asurite);
	$name = 	$db->clean($name);
	$email = 	$db->clean($email);
	$password = $db->clean($password);

	// Hash password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// Check if user is unique
	$result = $db->query("SELECT * FROM users WHERE email = '{$email}'");
	if(count($result) > 0) {
		$nameExistsError = true;
	}
	else {
		// Add new user to data
		$db->query("INSERT INTO users(role, email, password)  VALUES(1,'{$email}','{$password}')");
		$result = $db->query("SELECT * FROM users WHERE email = '{$email}'");
		$db->query("INSERT INTO student_details(id, name, asurite)  VALUES('{$result[0]['id']}','{$name}','{$asurite}')");
		// start session and redirect
		session_start();
		$_SESSION['user_id'] = $result[0]['id'];
		$_SESSION['user_role'] = $result[0]['role'];
		redirect('dashboard.php');
	}
}
?>


<?require_once "header.php";?>
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<h1 class="text-center">ASU Capstone Portal</h1>
				<div class="panel panel-default" id="login">
					<div class="panel-body">
						<form role="form" action="login_register.php" method="post">
							<input type="hidden" name="action" value="login">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" required>
							</div>
							<div id="login-error-div">
								<span id="login-error-text"></span>
							</div>
							<button type="submit" class="btn btn-default" name="submit">Sign In</button>
							<button type="button" class="btn btn-default" id="open_register_form">New User?</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-lg-offset-4">
				<div class="panel panel-default" id="register">
					<div class="panel-body">
						<form role="form" action="login_register.php" method="post">
							<input type="hidden" name="action" value="register">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="name" class="form-control" name="name" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" required>
							</div>
							<div class="form-group">
								<label for="asurite">ASURITE</label>
								<input type="asurite" class="form-control" name="asurite" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" required>
							</div>
							<div id="register-error-div">
								<span id="register-error-text"></span>
							</div>
							<button type="submit" class="btn btn-default" name="submit">Register</button>
							<button type="button" class="btn btn-default" id="open_login_form">Already Registered?</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="scripts/login.js"></script>
<script>
	<?if($nameError == true && isset($_POST['action'])) {?>
		$('#login-error-text').html("Error: Invalid username.")
		$('#login-error-div').show();
		$("#login").effect({
			"effect": "shake",
			"duration": 500,
			"distance": 10
		});
	<?}
	else if($passwordError == true && isset($_POST['action'])) {?>
		$('#login-error-text').html("Error: The password you entered is incorrect.")
		$('#login-error-div').show();
		$("#login").effect({
			"effect": "shake",
			"duration": 500,
			"distance": 10
		});
	<?}
	else if($nameExistsError == true && isset($_POST['action'])) {?>
		$("#login").hide();
		$("#register").show();
		$('#register-error-text').html("Error: That username already exists.")
		$('#register-error-div').show();
		$("#register").effect({
			"effect": "shake",
			"duration": 500,
			"distance": 10
		});
	<?}
	else {?>
		$('#register-error-div').hide();
		$('#login-error-div').hide();
	<?}?>
</script>
<?require_once "footer.php";?>