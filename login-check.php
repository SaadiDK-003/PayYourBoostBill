<?php
require_once 'config.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $getUserInfo = $con->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");

    if (mysqli_num_rows($getUserInfo) > 0) {
        $usr = mysqli_fetch_object($getUserInfo);
        $_SESSION['user'] = $usr->u_id;
        echo json_encode(["status" => "success", "cssClass" => "alert alert-success", "msg" => "Loggedin Successfully!"]);
    } else {
        echo json_encode(["status" => "error", "cssClass" => "alert alert-warning", "msg" => "No Record Found!"]);
    }
}
