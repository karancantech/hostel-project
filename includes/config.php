<?php
$host = "mc0wco404s4wwck44osgkwko";   // from MySQL URL
$dbuser = "mysql";                  // Normal User from Coolify
$dbpass = "fYtnhTxyk2uoNurJU00hCCiOzqfNjDPHcyJaAKbsB9INqSjd9YwQhdEJUleb9kEr";     // Normal User Password
$db = "default";                    // Initial database name

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
