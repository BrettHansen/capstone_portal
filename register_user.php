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
$result = $db->query("SELECT * FROM users WHERE email = '{$email}'");
if(count($result) > 0) {
	echo 'User already exists';
}
else {
	// Add new user to data
	$db->query("INSERT INTO users(role, email, password)  VALUES(1,'{$email}','{$password}')");
	$result = $db->query("SELECT * FROM users WHERE email = '{$email}'");
	$db->query("INSERT INTO student_details(id, name, asurite)  VALUES('{$result[0]['id']}','{$name}','{$password}')");
	// start session and redirect
	session_start();
	$_SESSION['user_id'] = $result[0]['id'];
	$_SESSION['user_role'] = $result[0]['role'];
	redirect('dashboard.php');
}
?>