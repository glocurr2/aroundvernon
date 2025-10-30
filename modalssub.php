<?php

function trimIt($field) {
	$field = ltrim($field);
	$field = rtrim($field);
	return $field;
}

if (isset($_POST['Signup'])) {
	
	
   $firstname = $_POST['inputFirstName']; // required
   $firstname = trimIt($firstname);
   $lastname = $_POST['inputLastName']; // required
   $lastname = trimIt($lastname);
   $email = $_POST['inputEmail']; // required
   $email = trimIt($email);
   $town = $_POST['inputTown']; // required
   $town = trimIt($town);
   $thestate = $_POST['inputState']; // required
   $userid = $_POST['inputUserID']; // required
   $userid = trimIt($userid);
   $password = $_POST['inputPassword']; //required
   $password = trimIt($password);
   

$sql = "INSERT INTO users_signup (firstname, lastname, email, username, password, town, state) VALUES ('$firstname', '$lastname', '$email', '$userid', '$password', '$town', '$thestate')";

    require_once 'includes/database.php';
	$db->open_connection();
    $db->query($sql);
    $db->close_connection();
	
	$_SESSION['fname'] = $firstname;
	//echo("hello " . $_SESSION['fname']);

}



if (isset($_POST['inputLoginID'])) {

   $loginid = $_POST['inputLoginID']; 
   $loginid  = trimIt($loginid);
   $loginpassword = $_POST['inputLoginPassword']; 
   $loginpassword = trimIt($loginpassword);

    require_once 'includes/database.php';
	$db->open_connection();
	
    $sql1 = "SELECT * FROM users_signup WHERE username = '$loginid' AND password = '$loginpassword'";
   
	$loginfirstname = "";//initializing
	
	$result = $db->query($sql1);
	
	while ($data = $db->fetch_assoc_array($result)) {
	   $loginfirstname =  $data["firstname"];
	}

	$_SESSION['fname'] = $loginfirstname;
	
	if (!$result) { 
	$_SESSION['login_correct'] = false;
	} else {
	$_SESSION['login_correct'] = true;
	}
}

?>