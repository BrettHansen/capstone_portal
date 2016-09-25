<?php
require('includes/config.php');

$email		= $_POST['email'];
$password	= $_POST['password'];

$db = new Database();

// Check if user exists
$result = $db->query("SELECT * FROM users WHERE email = '{$email}'");
if(count($result) == 0) {
	echo 'No User';
}
else{
	if (password_verify($password, $result[0]['password'])) {
	    echo 'Password is valid!';
	} else {
	    echo 'Invalid password.';
	}
}


?>