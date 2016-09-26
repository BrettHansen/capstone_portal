<?php
require('includes/config.php');

$db = new Database();

$query = $db->query("SELECT * FROM proposal_forms");

$forms = array();

foreach($query as $key => $value) {
	$forms[$key] = $value;
}

var_dump($forms);

?>