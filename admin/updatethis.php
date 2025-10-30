<?php

$value = json_decode(file_get_contents('php://input'));
$bname = $value->bname;
$address1 = $value->address1;
$city = $value->city;
$zip = $value->zip;
$phone = $value->phone;
$theid = $value->theid;

$bname = addslashes(trimIt($bname));
$address1 = addslashes(trimIt($address1));
$city = addslashes(trimIt($city));
$zip = trimIt($zip);
$phone = trimIt($phone);

	require_once '../includes/database.php';
	$db->open_connection();
	$sql = "UPDATE businesses SET bname='$bname', address1='$address1', city='$city', zip='$zip', state='NJ', phone='$phone' WHERE id='$theid'";
	$db->query($sql);
	$db->close_connection();
	
	
	function trimIt($field) {
	$field = ltrim($field);
	$field = rtrim($field);
	return $field;
 }

?>
