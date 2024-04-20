<?php
    require_once('../model/userModel.php');
    $name=$_REQUEST['name'];
    $email = $_REQUEST['email'];
    $role = $_REQUEST['role'];

    if(isset($_POST['cancel']))
    {
        header('location: ../view/usermanagement.php');
    }

    function validateName($name) {
        $trimmedName = trim($name);
        if ($trimmedName === '' || !ctype_alpha(str_replace(' ', '', $trimmedName))) {
            return false;
        }
        return true;
    }
    function containsAt($variable) {
        for ($i = 0; $i < strlen($variable); $i++) {
            if ($variable[$i] === '@') {
                return true;
            }
        }
        return false;
    }

    if(isset($_POST['add'])){
    if($name == "" || $role == "" || $email == ""){
        echo "null username/role/email";
    } elseif (!validateName($name)) {
        echo "invalid name";
    } elseif (strlen($name)<4) {
        echo "name has to be atleast in 4 letters";
    }elseif (!validateName($role)) {
        echo "invalid role";
    }elseif (!containsAt($email)) {
        echo "Invalid email address";
    } else {

        $status = addUser($name,$role,$email);
        if($status){
            header('location: ../view/usermanagement.php');
               
        }else{
            echo "error! Please try again";
        }
    
    }
}
?>