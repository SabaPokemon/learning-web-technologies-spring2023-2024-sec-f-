<?php
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$lname = $_REQUEST['lname'];
$fname = $_REQUEST['fname'];
$password = $_REQUEST['password'];
$date = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
$cpassword = $_REQUEST['cpassword'];
if (isset($_REQUEST["gender"])) {
    $gender = $_POST["gender"];
}
$message = "";

function isValidWord($word)
{

    $firstChar = $word[0];
    if (!(($firstChar >= 'a' && $firstChar <= 'z') || ($firstChar >= 'A' && $firstChar <= 'Z'))) {
        return false;
    }


    for ($i = 1; $i < strlen($word); $i++) {
        $char = $word[$i];

        if (!(($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z') || $char == '.' || $char == '-')) {
            return false;
        }
    }
    return true;
}
function containsAt($variable)
{
    for ($i = 0; $i < strlen($variable); $i++) {
        if ($variable[$i] === '@') {
            return true;
        }
    }
    return false;
}

if (isset($_POST['submit'])) {
    if ($fname == "" || $lname == "" || $email == "" || $phone == "" || $gender == "" || $password == "" || $cpassword == "") {
        echo "Please fill-up all fields!";
    } elseif (isValidWord($lname)) {
        echo "invalid name";
    } elseif (isValidWord($fname)) {
        echo "invalid name";
    } elseif (!containsAt($email)) {
        echo "Enter valid email!";
    } elseif ($month < 1 || $month > 12) {
        $message = "Month must be between 1 and 12";
    } elseif ($date < 1 || $date > 31) {
        $message = "date must be between 1 and 31";
    } elseif ($month < 1 || $month > 12) {
        $message = "Month must be between 1 and 12";
    } elseif ($year < 1900 || $year > 2016) {
        $message = "date must be between 1 and 31";
    } elseif ($password != $cpassword) {
        echo "Confirm password doesn't match";
    } else {
        echo "Submitted Succesfully";
    }
}
