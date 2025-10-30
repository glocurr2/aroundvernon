<?php
header('Content-type: application/json');

require_once '../includes/database.php';
	
$sql = "SELECT id, bname, address1, address2, city, state, zip, phone, website FROM businesses ORDER BY bname";

$db->open_connection();
$result = $db->query($sql);
	
$arrRows = array();

while ($data = $db->fetch_assoc_array($result)) {
	$data = array_map("stripslashes", $data);
	array_push($arrRows, $data);
}

echo json_encode($arrRows);

$db->close_connection();



?>







