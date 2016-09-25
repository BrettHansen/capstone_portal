<?php

$email		= $_POST['email'];
$password	= $_POST['password'];

$hash = '$2y$10$kbuhu6WLB8/LNY.CzE.kDu7acjH97LJ8cGc8z2uA6dzbDfF7bmXsu';

if (password_verify($password, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

?>