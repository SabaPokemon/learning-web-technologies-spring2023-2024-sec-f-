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
    <title>Flight Website</title>
</head>
<body>
<form method="post" action="../controller/flightCheck.php">
<table border="1" align="center">
<tr >
            <th >
                <h2 align="left">SAN TOUR</h2>
                <h3>
                <a href="tourCalendar.php">Tour Calendar</a>&nbsp;&nbsp;
                    <a href="reservation.php">Reserve Now!</a>&nbsp;&nbsp;
                    <a href="about.php">About</a>&nbsp;&nbsp;
                    <a href="notification.php">Notification</a>&nbsp;&nbsp;
                    <a href="wishlist.php">Wish List</a>&nbsp;&nbsp;
                    Logged in as <?php echo $username ?> 
                </h3><br>
            </th>
        </tr>
        <tr>
            <td>
    <h1 align="center">Flight</h1>
    <form method="post" action="../controller/flightCheck.php" enctype="multipart/form-data">
        <table border="0" align="center">
            <tr>
                <td>Departure City:</td>
                <td><input type="text" name="departure_city" ></td>
            </tr>
            <tr>
                <td>Destination:</td>
                <td><input type="text" name="destination" ></td>
            </tr>
            <tr>
                <td>Travel Dates:</td>
                <td><input type="date" name="departure_date" > to <input type="date"  name="return_date" ></td>
            </tr>
            <tr>
                <td>Number of Passengers:</td>
                <td><input type="number" name="num_passengers" min="1" max="50" ></td>
            </tr>
    
            
            <tr>
                <td align="center" colspan="2"><button type="submit" name="submit">Search Flights</button></td>
            </tr>
            
        </table>
    </form>

    <h1 style="font-size: 24px; color: #333;">Flight Deals and Offers</h1>
    <ul style="list-style-type: disc;">
        <li>Discounted fares to popular destinations</li>
        <li>Package deals for flights and hotels</li>
        <li>Promotions for specific airlines and routes</li>
    </ul>

    <h1 style="font-size: 24px; color: #333;">Destination Guides</h1>
    <ul style="list-style-type: disc;">
        <li>Recommended flights to popular destinations</li>
        <li>Travel tips and advice</li>
        <li>Attractions and things to do</li>
    </ul>

    <h1 style="font-size: 24px; color: #333;">Flight Booking Platform</h1>
    <p style="font-size: 16px; color: #333;">Search for and book flights directly on our website using our flight booking platform or API integration.</p>

    <h1 style="font-size: 24px; color: #333;">Travel Resources</h1>
    <ul style="list-style-type: disc;">
        <li>Flight comparison tools</li>
        <li>Airline reviews and ratings</li>
        <li>Travel guides and itineraries</li>
    </ul>
    </td>
        </tr>
        <tr>
                <td>
                <input type="submit" name="logout" value="Log out">
                </td>
            </tr>
        <tr>
            <td align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
            </tr>
    </table>
</form>
</body>
</html>
