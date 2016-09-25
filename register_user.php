<?php

$asurite 	= $_POST['asurite'];
$name		= $_POST['name'];
$email		= $_POST['email'];
$password	= $_POST['password'];

echo "ASURITE: ".$asurite."<br>Name: "."$name"."<br>Email: ".$email."<br>";
echo password_hash($password, PASSWORD_DEFAULT)."<br>";
?>