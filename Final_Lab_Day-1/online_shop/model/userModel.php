<?php 
    require_once('../model/db.php');
    $emps=[];
    function login($email, $password){
        session_start();
        $role="emp";
        $con = dbConnection();
        $sql = "select * from user where email='{$email}' and password='{$password}' and position='{$role}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $sql9 = "select username from user where email='{$email}' and password='{$password}' and position='{$role}'";
        $result9 = mysqli_query($con, $sql9);
        $row=mysqli_fetch_assoc($result9);
        if(isset($row['username']))
        {
            $_SESSION['username']=$row['username'];
        }
        
        if($count == 1 ){
            return 1;
        }
                
        $role="admin";
        $sql1 = "select * from user where email='{$email}' and password='{$password}' and position='{$role}'";
        $result1 = mysqli_query($con, $sql1);
        $count1 = mysqli_num_rows($result1);
        $sql = "select username from user where email='{$email}' and password='{$password}' and position='{$role}'";
        $result = mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($result);
        if(isset($row['username']))
        {
            $_SESSION['username']=$row['username'];
        }

        if($count1 == 1){
            return 2;
        }
        
    }
    

    function updateUser($name,$contact,$username,$password){
        $con = dbConnection();
        $sql = "update emp set name='{$name}', contact='{$contact}', password='{$password}' where username='{$username}'";       
        if (mysqli_query($con, $sql)) {
            $sql1 = "update user set password='{$password}' where username='{$username}'";
            if (mysqli_query($con, $sql1)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function editProduct($pname,$quantity,$price){
        $con = dbConnection();
        $sql = "update product set quantity='{$quantity}', price='{$price}' where productName='{$pname}'";       
        if (mysqli_query($con, $sql)) {
                return true;
        } else {
            return false;
        }
    }

 

    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from emp ";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        
        return $users;
    }

    function getAllProduct(){
        $con = dbConnection();
        $sql = "select * from product ";
        $result = mysqli_query($con, $sql);
        $products = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($products, $row);
        }
        
        return $products;
    }

    function deleteUser($name){
        $con = dbConnection();
        $sql = "DELETE FROM emp WHERE username='{$name}'";       
        if(mysqli_query($con, $sql)){
            $sql1 = "DELETE FROM user WHERE username='{$name}'";
            if (mysqli_query($con, $sql1)) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }

    }

    function deleteProduct($pname){
        $con = dbConnection();
        $sql = "DELETE FROM product WHERE productName='{$pname}'";       
        if(mysqli_query($con, $sql)){
                return true;
           
        }else{
            return false;
        }

    }

    function addUser($name, $contact, $username, $password) {
        $con = dbConnection();
        $sql = "INSERT INTO emp (name, contact, username, password) VALUES ('$name', '$contact', '$username', '$password')";
        if (mysqli_query($con, $sql)) {
            $sql1 = "INSERT INTO user (username, password,email,position) VALUES ('$username', '$password','$username@gmail.com','emp')";
            if (mysqli_query($con, $sql1)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function addProduct($pname,$quantity,$price) {
        $con = dbConnection();
        $sql = "INSERT INTO product (productName, quantity, price) VALUES ('$pname', '$quantity', '$price')";
        if (mysqli_query($con, $sql)) {
                return true;
        } else {
            return false;
        }
    }

   


?>
