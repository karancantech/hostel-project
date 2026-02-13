<?php
$dbuser = getenv('DB_USER');
$dbpass = getenv('DB_PASSWORD');
$host   = getenv('DB_HOST');
$db     = getenv('DB_DATABASE');

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
