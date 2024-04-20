<?php

    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
    }
    session_start();
    $username=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking List</title>
        <link rel="stylesheet" href="../controller/styleAbout.css">
    <style>
        span{
    color: #fabd02;
}
        </style>
    </head>
<body>
<table border="1" cellpadding="0" cellspacing="0" align="center">
        <tr >
            <th colspan="4">
                <h2 align="left">SAN <span>TOUR</span></h2>
                <h3>
                Logged in as <span><?php echo $username ?></span> &nbsp;&nbsp;
                <a href="../controller/logoutCheck.php" class="bt">Log out</a>
                </h3><br>
            </th></tr>

        <tr>
              <td align="center">Session date & time</td>  
              <td align="center">Service</td> 
              <td align="center">Payment Status</td> 
              <td align="center">Booking Status</td> 
        </tr>
        <tr>
              <td align="center">12-02-24 3:00PM</td>  
              <td align="center">Cox's Bazar</td> 
              <td align="center">Paid</td> 
              <td align="center">Confirmed <button>Cancel</button></td> 
        </tr>
        <tr>
            <td align="center">22-03-24 11:30PM</td>  
              <td align="center">Sylhet</td> 
              <td align="center">Redeem Session</td> 
              <td align="center">Confirmed <button>Review</button></td> 
        </tr>
        <tr>
        <td align="center">02-11-24 3:00PM</td>  
              <td align="center">Rangamati</td> 
              <td align="center">Checking</td> 
              <td align="center">Pending</td> 
        </tr>
        <tr>
        <td align="center">17-10-24 9:30PM</td>  
              <td align="center">Sajek</td> 
              <td align="center">Failed</td> 
              <td align="center">Failed</td> 
        </tr>
        <tr>
            <td colspan="4" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
            </tr>
        </table>
</body>
</html>
