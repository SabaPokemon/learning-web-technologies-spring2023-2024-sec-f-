<?php
    require_once('../model/userModel.php');


    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    

    if(isset($_POST['submit'])){
        $time=1;
        if(isset($_REQUEST['check']))
    {
        $time=1000;
    }
    if($email == "" || $password == "" ){
        echo "null usernamepassword";
    }else {

        $status = login($email, $password);

        if($status==1){
            setcookie('flag','true', time()+3000+$time, '/');
            header('location: ../view/empDashboard.php');
        }elseif($status==2){
            setcookie('flag','true',  time()+3000+$time, '/');
            header('location: ../view/adminDashboard.php');
        }else{
            echo "invalid User or password!";
        }    
    }
    
}
?>