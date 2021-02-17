<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'actSystem';

$conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
//check connection_aborted
if ($conn->connect_error) {
	die("Connection failed". $conn->connect_error);
?>

