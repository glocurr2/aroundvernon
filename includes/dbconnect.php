<?php

$dbhost = "";
$dbuser = "";
$dbpass = "";
$db = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn->connect_error) {
    die("Connection failed: ");
}
