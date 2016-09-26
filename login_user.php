<?php
require('includes/config.php');

$email	= $_POST['email'];
$password	= $_POST['password'];

$db = new Database();

// TO DO - Validate email as valid

// Check if user exists
$result = $db->query("SELECT * FROM users WHERE email = '{$email}'");
if(count($result) == 0) {
	echo 'No User';
}
else{
	if (password_verify($password, $result[0]['password'])) {
	    session_start();
		$_SESSION['user_id'] = $result[0]['id'];
		$_SESSION['user_role'] = $result[0]['role'];
		redirect('dashboard.php');
	} else {
	    echo 'Invalid password.';
	}
}


?>