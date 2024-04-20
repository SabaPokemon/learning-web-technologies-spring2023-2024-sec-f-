<?php
require_once('../view/flightlist.php');
    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
    }
    session_start();
    $username=$_SESSION['username'];
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
</head>
<body>

        <table border=1 align="center">
        <tr >
            <th colspan="8">
                <h2 align="left">SAN TOUR</h2>
                <h3>
                <a href="tourCalendar.php">Tour Calendar</a>&nbsp;&nbsp;
                    <a href="about.php">About</a>&nbsp;&nbsp;
                    <a href="reservation.php">Reserve Now!</a>
                    <a href="notification.php">Notification</a>&nbsp;&nbsp;
                    <a href="wishlist.php">Wish List</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    Logged in as <?php echo $username ?>
                </h3><br>
            </th>
        </tr>
            <tr><td colspan="8" align="center"><h1>Flights</h1></td></tr>
            <tr> 
                <td>Flight</td>
                <td>Airline</td>
                <td>Departure</td>
                <td>Arrival</td>
                <td>Departure Time </td>
                <td>Arrival Time</td>
                <td>Duration</td>
                <td>Price</td>
            </tr>
            <?php for($i=1; $i<=count($flights); $i++){?>
            <tr>
                <td><?php echo $flights[$i]['flight']; ?></td>
                <td><?php echo $flights[$i]['airline']; ?></td>
                <td><?php echo $flights[$i]['departure']; ?></td>
                <td><?php echo $flights[$i]['arrival']; ?></td>
                <td><?php echo $flights[$i]['departureTime']; ?></td>
                <td><?php echo $flights[$i]['arrivalTime']; ?></td>
                <td><?php echo $flights[$i]['duration']; ?></td>
                <td><?php echo $flights[$i]['price']; ?></td>
                
            </tr>
            <?php } ?>
            <tr>
                <td colspan="8" align="center">
                <a href="../view/flight.php"><button>Ok</button></a>
                </td>
            </tr>
            <tr>
                <td>
                <a href="../controller/logoutCheck.php"><button>Log out</button></a>
                </td>
            </tr>
            <tr>
            <td colspan="8" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
        </tr>
        </table>
</body>
</html>