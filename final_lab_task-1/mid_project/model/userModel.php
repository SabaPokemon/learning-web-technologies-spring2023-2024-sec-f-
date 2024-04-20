<?php 
    require_once('../model/db.php');
    
    function login($email, $password){
        session_start();
        $role="user";
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
            return 1;
        }
        $role="host";
        $sql1 = "select * from user where email='{$email}' and password='{$password}' and position='{$role}'";
        $result1 = mysqli_query($con, $sql1);
        $count1 = mysqli_num_rows($result1);
        $sql = "select username from user where email='{$email}' and password='{$password}' and position='{$role}'";
        $result = mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($result);
        if(isset($row['username']) )
        {
            $_SESSION['username']=$row['username'];
        }

        if($count1 == 1){
            return 1;
        }else{
            return 0;
        }
    }
    function getPosition($username)
    {
        $con = dbConnection();
        $sql = "select position from user where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($result);
        if(isset($row['position']) )
        {
            return $row['position'];
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
    

    function alterUser($password,$email){
        $con = dbConnection();
        $sql = "update user set password='{$password}' where email='{$email}'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function email($email){
        $con = dbConnection();
        $sql = "select * from user where email='{$email}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getAllUser(){
        $con = dbConnection();
        $sql = "select username,email,position from user where position!='admin'";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        
        return $users;
    }

    

    function deleteUser($name){
        $con = dbConnection();
        $sql = "DELETE FROM user WHERE username='{$name}'";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }

    }

    function addUser($name,$role,$email){
        $con = dbConnection();
        $sql = "insert into user values('{$name}', '12345678', '{$email}', '{$role}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }


?>
