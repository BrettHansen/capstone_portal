<?php
require('includes/config.php');

$db = new Database();

$project_name = $_POST["description_title"];
$project_json = json_encode($_POST);

$success = $db->query("INSERT INTO proposal_forms (name, form) VALUES ('{$project_name}', '{$project_json}')");

echo $success;

?>