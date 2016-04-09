<?php 

header("Access-Control-Allow-Origin: *");
$number = $_POST['number'];

$first_raw = file_get_contents("first_names.txt");
$last_raw = file_get_contents("surnames.txt");
$first_split = preg_split('/\s+/', $first_raw);
$last_array = preg_split('/\s+/', $last_raw);

$first_array = array();
for($i = 0; $i < count($first_split); $i++) {
	if($i % 4 == 0)
		array_push($first_array, substr($first_split[$i], 0, 1).strtolower(substr($first_split[$i], 1)));
}

$full_names = array();
for($i = 0; $i < $number; $i++) {
	$rand1 = rand(0, count($first_array) - 1);
	$rand2 = rand(0, count($last_array) - 1);
	array_push($full_names, $first_array[$rand1]." ".$last_array[$rand2]);
}

echo json_encode($full_names);



?>