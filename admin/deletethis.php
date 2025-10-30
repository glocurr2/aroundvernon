<?php


$value = json_decode(file_get_contents('php://input'));
$theid = $value->theid;

	require_once '../includes/database.php';
	$db->open_connection();
	$sql = "DELETE FROM businesses WHERE id='$theid'";
	$db->query($sql);
	$db->close_connection();
	

?>
