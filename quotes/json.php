<?php


$dayofyear = $_GET['rnum'];

require_once '../includes/dbconnect.php';



$sql = "SELECT subject, author, occupation, years, dayofyear, quote FROM quotations WHERE dayofyear = '$dayofyear'";
$result = mysqli_query($conn, $sql);


$arrRows = array();
while ($data = $result->fetch_assoc()) {
  array_push($arrRows, $data);
}

header('Content-type: application/json');
echo json_encode($arrRows);

mysqli_free_result($result);

mysqli_close($conn);
