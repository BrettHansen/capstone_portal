<?
require_once('includes/config.php');
session_start();
$_SESSION = array();
session_destroy();
redirect('login_register.php');

?>