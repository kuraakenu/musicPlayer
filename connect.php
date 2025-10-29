<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "damn";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
    exit();
}