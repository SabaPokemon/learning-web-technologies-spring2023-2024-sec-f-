<?php
require('../model/userModel.php');
if(isset($_GET['deleteusername']))
    {
        $name=$_GET['deleteusername'];
        $status=deleteUser($name);
        if($status){
            header('location: ../view/usermanagement.php');
        }else{
            echo "error in delete option";
        }

    }else{
        echo "error";
    }

    ?>