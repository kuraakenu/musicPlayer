<?php
include("connect.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
$check = mysqli_num_rows($result);
$data = $result->fetch_assoc();

if ($check > 0) {
    if(password_verify($password, $data['password'])) {
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['status'] = "login";
    header("location:../landing_page.php");
        } else {
            header("location:../login.php?message=wrong_pass");
        }
    } else {
        header("location:../login.php?message=user_not_found");
    }