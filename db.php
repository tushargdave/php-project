<?php
$host = 'localhost';
$dbname = 'college';
$username = 'root';
$password = 'Vatsal2008';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>