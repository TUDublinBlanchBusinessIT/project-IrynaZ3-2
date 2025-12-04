<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "project_web";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
?>
