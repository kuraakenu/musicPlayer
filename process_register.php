<?php
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$hash_pass = password_hash($password, PASSWORD_DEFAULT);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$nik = $_POST['nik'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "SELECT * FROM users WHERE username = '$username' OR nik = '$nik'";
$result = $conn->query($sql);
$check = mysqli_num_rows($result);

if ($check == 0) {
    $sql = "INSERT INTO users (username, password, first_name, last_name, nik, phone_number, email, address) VALUES ('$username', '$hash_pass', '$first_name', '$last_name', '$nik', '$phone_number', '$email', '$address')";
    $conn->query($sql);
    header("location:../login.php?message=created");
} else {
    header("location:../signup.php?message=exist");
}