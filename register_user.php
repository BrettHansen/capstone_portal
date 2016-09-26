<?php
require('includes/config.php');

$asurite 	= $_POST['asurite'];
$name		= $_POST['name'];
$email		= $_POST['email'];
$password	= $_POST['password'];

$db = new Database();

// TO DO - validate all fields

// Clean input
$asurite = $db->clean($asurite);
$name = $db->clean($name);
$email = $db->clean($email);
$password = $db->clean($password);

// Hash password
$password = password_hash($password, PASSWORD_DEFAULT);

// Check if user is unique
$result = $db->query("SELECT * FROM users WHERE asurite = '{$asurite}'");
if(count($result) > 0) {
	echo 'User already exists';
}
else {
	// Add new user to data
	$result = $db->query("INSERT INTO users(name, role, email, asurite, password)  VALUES('{$name}',1,'{$name}','{$asurite}','{$password}')");
	if($result) {
		// start session and redirect
		session_start();
		$_SESSION['user_name'] = $name;
		$_SESSION['user_role'] = 1;
		redirect('dashboard.php');
	}
	else {
		// error page of some sort
	}

}
?>