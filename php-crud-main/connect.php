<?php
$hostname = 'localhost';
$username = 'root';
$password = '8102'; // default password for WAMP is empty
$database = 'blist'; // Make sure this is the correct database name
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Something went wrong");
}
?>