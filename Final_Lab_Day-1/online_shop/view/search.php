<?php
require_once('../view/flightlist.php');
    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
    }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
</head>
<body>

        <table border=1 align="center">
        </tr>
            <tr><td colspan="8" align="center"><h1>Search</h1></td></tr>
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
           
        </table>
</body>
</html>