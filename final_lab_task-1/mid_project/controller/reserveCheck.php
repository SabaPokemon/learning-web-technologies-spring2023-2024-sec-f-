<?php

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$contact_number = $_REQUEST['contact_number'];
$email = $_REQUEST['email'];
$check_in_date = $_REQUEST['check_in_date'];
$hotel_name = $_REQUEST['hotel_name'];
$room_type = $_REQUEST['room_type'];
$number_of_people = $_REQUEST['number_of_people'];

function validateName($name) {
    $trimmedName = trim($name);
    if ($trimmedName === '' || !ctype_alpha(str_replace(' ', '', $trimmedName))) {
        return false;
    }
    return true;
}
function validateContactNumber($contact_number) {
    $trimmedNumber = trim($contact_number);
    if (strlen($trimmedNumber) === 11 && ctype_digit($trimmedNumber)) {
        return true;
    }
    return false; 
}
function containsAt($variable) {
    for ($i = 0; $i < strlen($variable); $i++) {
        if ($variable[$i] === '@') {
            return true;
        }
    }
    return false;
}

if (isset($_POST['submit'])) {
    $src = $_FILES['myfile']['tmp_name'];
    $des = "C:/xampp/htdocs/mid_project/upload/".$_FILES['myfile']['name'];
    if ($name=="" || $age=="" || $contact_number=="" || $email=="" || $check_in_date=="" || $hotel_name=="" || $room_type=="" || $number_of_people=="" || $_FILES=="") {
        echo "Please fill-up all fields!";
    }elseif(!move_uploaded_file($src, $des)){
        echo "upload error";
    } elseif (!validateName($name)) {
        echo "invalid name";
    }elseif (!is_numeric($age) || $age < 18 || $age > 90 || !ctype_digit($age)) {
        echo "Age must be a valid number between 18 and 90.";
    } elseif (!validateContactNumber($contact_number)) {
        echo "Contact number must be in XXXXXXXXXXX format";
    } elseif (!containsAt($email)) {
        echo "Invalid email address";
    } elseif (strtotime($check_in_date) === false) {
        echo "Invalid check-in date format";
    } elseif (!is_numeric($number_of_people) || $number_of_people < 1 || $number_of_people > 50 || !ctype_digit($number_of_people)) {
        echo "Number of people must be a valid number between 1 and 50";
    } else {
            setcookie('reservation_message', "Thank you for your reservation! Your booking has been successfully submitted.", time()+300, '/');
            header('Location: ../view/notification.php');
    }
    
}


?>