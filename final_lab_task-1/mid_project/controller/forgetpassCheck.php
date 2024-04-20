<?php
session_start();
require_once('../model/userModel.php');
$email = $_REQUEST['email'];

$otp = rand(100000, 999999);
$subject = "OTP Verification from SAN TOUR";
$emailMessage = "Your OTP for verification is: " . $otp; 
$headers = "From: bintenur54@gmail.com";

$_SESSION['email'] = $email;
$_SESSION['otp'] = $otp;

function containsAt($variable) {
    for ($i = 0; $i < strlen($variable); $i++) {
        if ($variable[$i] === '@') {
            return true;
        }
    }
    return false;
}

$status = email($email);
if (isset($_POST['submit'])) {
    if ($email=="") {
        echo "Please provide email";
    } elseif (!containsAt($email)) {
        echo "Invalid email address";
    } elseif ($status != 1) {
        echo "Email has no account";
    }elseif (mail($email, $subject, $emailMessage, $headers)) { 
        header("Location: ../view/otpVerification.php");
    } else {
        echo "Failed to send OTP. Please try again later.";
    }
}


?>