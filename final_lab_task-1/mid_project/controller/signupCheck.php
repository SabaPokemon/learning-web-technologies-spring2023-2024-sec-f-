<?php
    require_once('../model/userModel.php');
    $fusername=$_REQUEST['fusername'];
    $lusername=$_REQUEST['lusername'];
    $username = $fusername.$lusername;
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $re_password = $_REQUEST['re-password'];

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

    if(isset($_POST['submit'])){
    if($fusername == "" || $lusername == "" || $password == "" || $email == ""){
        echo "null username/password/email";
    }  elseif (!validateName($fusername)) {
        echo "invalid first name";
    } elseif (strlen($username)<4) {
        echo "name has to be atleast in 4 letters";
    }elseif (!validateName($lusername)) {
        echo "invalid last name";
    }  elseif (strlen($password) < 8){
        echo "atleast 8 characters pass";
    }   elseif ($password!=$re_password){
        echo "didn't match re-pass!";
    } elseif (!containsAt($email)) {
        echo "Invalid email address";
    } else {

        $status = createUser($username,$password,$email);
        if($status){
            if(isset($_COOKIE['usermanagement']))
            {
                setcookie('usermanagement','as',time()-20,'/');
                header('location: ../view/usermanagement.php');
            }else{
                header('location: ../view/login.php');
            }
            
        }else{
            echo "error! Please try again";
        }
    
    }
}
?>