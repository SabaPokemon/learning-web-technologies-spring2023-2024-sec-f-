<?php
       if(isset($_COOKIE['code'])){
        if (isset($_REQUEST['ok'])) {
            header('location: ../view/forgetpass.php');
            setcookie('code','asas',time()-300,'/');
        } 
       }else{
        if (isset($_REQUEST['ok'])) {
           header('location: ../view/login.php');
       } 
       }
                 
           
?>