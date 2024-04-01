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

    function validateName($name) {
        $trimmedName = trim($name);
        if ($trimmedName === '' || !ctype_alpha(str_replace(' ', '', $trimmedName))) {
            return false;
        }
        return true;
    }

    if(isset($_POST['update'])){
    if (!validateName($name)) {
        echo "invalid name";
    } elseif (strlen($name)<4) {
        echo "name has to be atleast in 4 letters";
    }else {

        $status = alterUser($name,$contact,$username,$password);
        if($status){
            header('location: ../view/management.php');
               
        }else{
            echo "error! Please try again";
        }
    
    }
}
?>