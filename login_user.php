<?php
require('includes/config.php');

$asurite	= $_POST['asurite'];
$password	= $_POST['password'];

$db = new Database();

// TO DO - Validate email as valid

// Check if user exists
$result = $db->query("SELECT * FROM users WHERE asurite = '{$asurite}'");
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