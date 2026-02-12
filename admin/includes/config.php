<?php
$dbuser = "root";
$dbpass = "H7g1loZk7jOKiC1hi2l8wErLuHgiOVstUXz9MZBkMKwCdPAsFJjkT3lbFZS408FH";   // <-- put correct password here
$host   = "mysql";                      // <-- change from localhost
$db     = "hostel";

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
