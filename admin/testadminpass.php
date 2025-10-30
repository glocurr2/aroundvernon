<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

	$un = isset($_GET['un']) ? $_GET['un'] : '';
	$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
   
   
if ($un != "" && $pass != "") {
	
   $sql1 = "SELECT * FROM users_admin WHERE username = '$un' AND password = '$pass'";

	require_once '../includes/database.php';
    $db->open_connection();
	
	$result = $db->query($sql1);
	
	if ($result->num_rows > 0) {
		$result = "okay";
	} else { 	
		$result = "noexist";
	}

	$db->close_connection();
	
	$arr = array('result' => $result, 'b' => 2);

	echo json_encode($arr);
}
	
?>