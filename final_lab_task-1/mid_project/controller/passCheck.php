<?php
session_start();
require_once('../model/userModel.php');
require_once('validations.php');
$email = $_SESSION['email'];
$password = $_REQUEST['newpassword'];

$status = alterUser($password, $email);
if (isset($_POST['Submit'])) {
    if ($password=="") {
        echo "Please provide password";
    } elseif (strlen($password) < 8) {
        echo "Password must be at least 8 characters long";
    }elseif ($status==1) {
        header("location: ../view/login.php");    
    }
}


?>