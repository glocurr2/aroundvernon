<?php

$value = json_decode(file_get_contents('php://input'));
$bname = $value->bname_a;
$address1 = $value->address1_a;
$city = $value->city_a;
$zip = $value->zip_a;
$phone = $value->phone_a;

$bname = addslashes(trimIt($bname));
$address1 = addslashes(trimIt($address1));
$city = addslashes(trimIt($city));
$zip = trimIt($zip);
$phone = trimIt($phone);

echo($bname);

	require_once '../includes/database.php';
	$db->open_connection();
	$sql = "INSERT INTO businesses (bname, address1, city, state, zip, phone) VALUES ('$bname', '$address1', '$city', 'NJ', '$zip', '$phone')";
	$db->query($sql);
	$db->close_connection();


function trimIt($field) {
	$field = ltrim($field);
	$field = rtrim($field);
	return $field;
}
?>
