<?php
session_start(); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../securimage/securimage.php';//$_SERVER['DOCUMENT_ROOT'] .
$securimage = new Securimage();

require_once 'database.php';
	
function trimIt2($field) {
	$field = ltrim($field);
	$field = rtrim($field);
	return $field;
}

if (isset($_POST['SendMessage'])) {
   $recordiscreated = "no";//initializing
   $contactfirstname = $_POST['inputContactFirstName']; // required
   $contactfirstname = trimIt2($contactfirstname);
      $_SESSION["contactfirstname"] = $contactfirstname;
   $contactlastname = $_POST['inputContactLastName']; // required
   $contactlastname = trimIt2($contactlastname);
      $_SESSION["contactlastname"] = $contactlastname;
   $contactemail = $_POST['inputContactEmail']; // required
   $contactemail = trimIt2($contactemail);
      $_SESSION["contactemail"] = $contactemail;
   $contactmessage = $_POST['inputContactMessage']; // required
   $contactmessage = trimIt2($contactmessage);
   	  $_SESSION["contactmessage"] = $contactmessage;
   $isRobot = $_POST['inputAddress'];
  
  if ($securimage->check($_POST['captcha_code']) == false || strlen($isRobot) > 0) {
	 header("Location: ../contact-changed.php?captcha=n");
  } else {

$sql2 = "INSERT INTO contact_us (firstname, lastname, email, message) VALUES ('$contactfirstname', '$contactlastname', '$contactemail', '$contactmessage')";

	$db->open_connection();

	if ($db->query($sql2)) {
	$recordiscreated = "yes";
	} else {
	}

	$db->close_connection();
	
	if ($recordiscreated == "yes") {
		$email_to = "glocurran7@gmail.com";  
		$email_from = "info@aroundvernon.com";
    	$email_subject = "A Message sent from the Around Vernon Website";
		
		$email_message = "";
   		$email_message .= "First Name: ". $contactfirstname ."\n";
    	$email_message .= "Last Name: ". $contactlastname. "\n";
   		$email_message .= "Email: ". $contactemail ."\n";
    	$email_message .= "Comments: ". $contactmessage ."\n";
  
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_to."\r\n" .
		'X-Mailer: PHP/' . phpversion();
 		@mail($email_to, $email_subject, $email_message, $headers);  

	}
	   $_SESSION["contactfirstname"] = '';
	   $_SESSION["contactlastname"] = '';
	   $_SESSION["contactemail"] = '';
	   $_SESSION["contactmessage"] = '';
	header("Location: ../contact-changed.php?captcha=y");
  }
}


?>