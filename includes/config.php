<?php
$dbuser = "root";
$dbpass = "cantech@123";
$host = "mysql";
$db = "hostel";

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
