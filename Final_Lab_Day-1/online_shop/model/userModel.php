<?php 
    require_once('../model/db.php');
    
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
  
    function createUser($username,$password,$email){
        $role="user";
        $con = dbConnection();
        $sql = "insert into user values('{$username}', '{$password}', '{$email}', '{$role}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
    

    function alterUser($name,$contact,$username,$password){
        $con = dbConnection();
        $sql = "update emp set name='{$name}', contact='{$contact}', username='{$username}' where password='{$password}'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

 

    function getAllUser(){
        $con = dbConnection();
        $sql = "select name,contact,username,password from emp ";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        
        return $users;
    }

    

    function deleteUser($name){
        $con = dbConnection();
        $sql = "DELETE FROM emp WHERE username='{$name}'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }

    }

    function addUser($name,$contact,$username,$password){
        $con = dbConnection();
        $sql = "insert into emp values('{$name}', '{$contact}', '{$username}', '{$password}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }


?>
