<?php
    require_once('../model/userModel.php');
    $name=$_REQUEST['name'];
    $contact = $_REQUEST['contact'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    if(isset($_POST['cancel']))
    {
        header('location: ../view/management.php');
    }

    function validateUsername($username) {
        $trimmedName = trim($username);
        if ($trimmedName === '' || !ctype_alpha(str_replace(' ', '', $trimmedName))) {
            return false;
        }
        return true;
    }

    function validateName($name) {
        $trimmedName = trim($name);
        if ($trimmedName === '') {
            return false;
        }
        for ($i = 0; $i < strlen($trimmedName); $i++) {
            if (!(ctype_alpha($trimmedName[$i]) || $trimmedName[$i] === ' ' || $trimmedName[$i] === '-')) {
                return false;
            }
        }
        return true;
    }

    function validateContactNumber($contact) {
        $trimmedNumber = trim($contact);
        if (strlen($trimmedNumber) === 11 && ctype_digit($trimmedNumber)) {
            return true;
        }
        return false; 
    }


    if(isset($_POST['update'])){
        if($name == "" || $contact == "" || $username == "" || $password==""){
            echo "fill-up all";
        } elseif (!validateUsername($username)) {
            echo "invalid username";
        } elseif (!validateName($name)) {
            echo "invalid name";
        }elseif (!validateContactNumber($contact)) {
            echo "Contact number must be in XXXXXXXXXXX format";
        }  elseif (!strlen($password)<8) {
            echo "8 charaters needed in password";
        }  elseif (strlen($username)<4) {
            echo "username has to be atleast in 4 letters";
        }else {

        $status = updateUser($name,$contact,$username,$password);
        if($status){
            header('location: ../view/management.php');
               
        }else{
            echo "error! Please try again";
        }
    
    }
}
?>
