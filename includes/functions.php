<?

require('config.php');

$db = new Database();

$result = $db->query("SELECT * FROM role_codes");
print_r($result)


?>