<?php 
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

require_once 'includes/database.php';

$db->open_connection();

	
$sql = "SELECT id, bname, address1, address2, city, state, zip, phone, website FROM businesses WHERE approved = 1 ORDER BY bname";

$result = $db->query($sql);
	
$arrRows = array();
while ($data = $db->fetch_assoc_array($result)) {
	$data = array_map("stripslashes", $data);
	array_push($arrRows, $data);
}


header('Content-type: application/json');
echo json_encode($arrRows);

	
$db->close_connection();	


?>







