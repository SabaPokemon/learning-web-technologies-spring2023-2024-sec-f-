<?php
require('../model/userModel.php');
if(isset($_GET['deleteproductName']))
    {
        $pname=$_GET['deleteproductName'];
        $status=deleteProduct($pname);
        if($status){
            header('location: ../view/product.php');
        }else{
            echo "error in delete option";
        }

    }else{
        echo "error";
    }

    ?>