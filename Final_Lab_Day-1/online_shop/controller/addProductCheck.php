<?php
    require_once('../model/userModel.php');
    $pname=$_REQUEST['pname'];
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];

    function validateName($pname) {
        $trimmedName = trim($pname);
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

    function validateNumber($number) {
        if ($number ==0 || !ctype_digit($number)) {
            return false;
        }
        return true;
    }


    if(isset($_POST['cancel']))
    {
        header('location: ../view/product.php');
    }

    if(isset($_POST['add'])){
    if($pname == "" || $quantity == "" || $price == "" ){
        echo "fill all";
    }elseif (!validateName($pname)) {
        echo "invalid name";
    }elseif (!validateNumber($quantity)) {
        echo "invalid quantity";
    } elseif (!validateNumber($price)) {
        echo "invalid price";
    } else {

        $status = addProduct($pname,$quantity,$price);
        if($status){
            header('location: ../view/product.php');
               
        }else{
            echo "error! Please try again";
        }
    
    }
}
?>