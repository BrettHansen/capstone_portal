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
	echo "INSERT INTO users(name, role, email, asurite, password)  VALUES('{$name}',1,'{$name}','{$asurite}','{$password}')";
	$db->query("INSERT INTO users(name, role, email, asurite, password)  VALUES('{$name}',1,'{$name}','{$asurite}','{$password}')");
	echo 'User added';
}
?>