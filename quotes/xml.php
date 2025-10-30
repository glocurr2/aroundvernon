<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$dayofyear = date("z") + 1;

require_once '../includes/dbconnect.php';

$sql = "SELECT subject, author, occupation, years, quote FROM quotations WHERE dayofyear = '$dayofyear'";
$result = mysqli_query($conn, $sql);

$quotations = new SimpleXMLElement("<quotations></quotations>");

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	$subject = htmlentities($row['subject'], ENT_QUOTES, 'UTF-8');
	$author = htmlentities($row['author'], ENT_QUOTES, 'UTF-8');
	$occupation = htmlentities($row['occupation'], ENT_QUOTES, 'UTF-8');
	$years = htmlentities($row['years'], ENT_QUOTES, 'UTF-8');
	$quote = htmlentities($row['quote'], ENT_QUOTES, 'UTF-8');
	$quotations = $quotations->addChild('quotations');
	$quotations->addChild('subject', $subject);
	$quotations->addChild('author', $author);
	$quotations->addChild('occupation', $occupation);
	$quotations->addChild('years', $years);
	$quotations->addChild('quote', $quote);
}

mysqli_free_result($result);
mysqli_close($conn);

header('Content-type: text/xml');
echo $quotations->asXML();
