<?php

$departure_city = $_REQUEST['departure_city'];
$destination = $_REQUEST['destination'];
$departure_date = $_REQUEST['departure_date'];
$return_date = $_REQUEST['return_date'];
$num_passengers = $_REQUEST['num_passengers'];

function validateName($name) {
    $trimmedName = trim($name);
    if ($trimmedName === '' || !ctype_alpha(str_replace(' ', '', $trimmedName))) {
        return false;
    }
    return true;
}

if (isset($_POST['submit'])) {
    
    if($departure_city=="" || $destination=="" || $departure_date=="" || $return_date=="" || $num_passengers=="")
    {
        echo "please fill-up all fileds!";
    }  elseif (!validateName($departure_city)) {
        echo "invalid departure city";
    }elseif (!validateName($destination)) {
        echo "invalid destination";
    }elseif (strtotime($departure_date) === false) {
        echo "Invalid cdeparture date format";
    }elseif (strtotime($return_date) === false) {
        echo "Invalid return date format";
    } elseif (!is_numeric($num_passengers) || $num_passengers < 1 || $num_passengers > 50 || !ctype_digit($num_passengers)) {
        echo "Number of passengers must be a valid number between 1 and 50";
    }else{
        setcookie('flight', 'true', time()+3000, '/');
        header('location: ../view/search.php');
    }
}

if(isset($_REQUEST['logout']))
    {
    setcookie('flag', 'abc', time()-10, '/');
    header('location: ../view/login.php');
    }

?>