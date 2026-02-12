<?php
$dbuser = "mysql";
$dbpass = "fYtnhTxyk2uoNurJU00hCCiOzqfNjDPHcyJaAKbsB9INqSjd9YwQhdEJUleb9kEr";
$host = "mysql-database-mc0wco404s4wwck44osgkwko";  // MySQL container name
$db = "hostel";

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
