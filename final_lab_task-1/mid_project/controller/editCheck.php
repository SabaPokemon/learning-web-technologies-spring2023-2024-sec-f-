<?php

    
    $generalInformation = $_REQUEST['info'];
    $location = $_REQUEST['local'];
    $howtoReach = $_REQUEST['reach'];
    
    function validateName($name) {
        $trimmedName = trim($name);
        if ($trimmedName === '' || !ctype_alpha(str_replace(' ', '', $trimmedName))) {
            return false;
        }
        return true;
    }
    
    if(isset($_POST['cancel']))
    {
        header('location: ../view/wishlist.php');
    }

    if(isset($_REQUEST['update']))
    {
        $src = $_FILES['myfile']['tmp_name'];
        $des = "C:/xampp/htdocs/mid_project/upload/".$_FILES['myfile']['name'];
        if ($generalInformation=="" || $location=="" || $howtoReach=="" || $_FILES=="") {
            echo "Please fill-up all fields!";
        }elseif(!move_uploaded_file($src, $des)){
            echo "upload error";
        } elseif (!validateName($generalInformation)) {
            echo "invalid general Information";
        } elseif (!validateName($howtoReach)) {
            echo "invalid how to Reach";
        }elseif (!validateName($location)) {
            echo "invalid location";
        }else{

            header('Location: ../view/sajek.php');

        }
    }
    


?>