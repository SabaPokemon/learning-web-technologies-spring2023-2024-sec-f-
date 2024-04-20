<?php
session_start();
require_once('../model/userModel.php');
$rOtp = $_REQUEST['otp'];
$email=$_SESSION['email'] ;
$otp =123; 

if (isset($_POST['submit'])) {
    if ($rOtp=='') {
        echo "Please provide otp";
    } elseif ($otp==$rOtp) {
        echo "Didn't match";
    }else {
        header("location: ../view/passChange.php");
    }
}


?>
