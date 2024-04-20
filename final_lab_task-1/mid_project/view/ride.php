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
    <title>Ride</title>
</head>
<body>
    <table border="1" align="center">
    <tr >
            <th colspan="5">
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
        <tr>
            <td>
    <h1 align="center">Transportation Services</h1>
    <h2>Transportation Options</h2>
    <p><b>Taxis:</b>Available throughout the city. Prices vary depending on the distance and time of travel.</p>
    <p><b>Rental Cars:</b> Available at local airports and car rental companies. Prices vary depending on the type of car and duration of rental.</p>
    <p><b>Public Transportation:</b> Buses, subways, and trains are available in the city. Prices vary depending on the type of transportation and distance traveled.</p>
    <p><b>Ride-Sharing Services:</b> Uber and Lyft are available in the city. Prices vary depending on the distance and time of travel.</p>
    <h2>Tour Itineraries</h2>
    <p><b>Guided Bus Tours:</b> Available daily at 10:00 AM and 2:00 PM. Prices start at $20 per person.</p>
    <p><b>Boat Cruises:</b> Available daily at 11:00 AM and 3:00 PM. Prices start at $30 per person.</p>
    <p><b>Helicopter Rides:</b> Available daily at 10:00 AM and 2:00 PM. Prices start at $100 per person.</p>
    <p><b>Booking Information:</b> Call (123) 456-7890 or visit our website to book a tour.</p>
    <h2>Local Attractions</h2>
    <p><b>Attraction 1:</b> Located at 123 Main Street. <b>Recommended transportation:</b> Bus or taxi.</p>
    <p><b>Attraction 2:</b> Located at 456 Park Avenue. <b>Recommended transportation:</b> Subway or walk.</p>
    <p><b>Attraction 3:</b> Located at 789 Broadway. <b>Recommended transportation:</b> Car or ride-sharing service.</p>
    <h2>Travel Tips</h2>
    <p><b>Local Traffic Regulations:</b> Follow all traffic laws and signs.</p>
    <p><b>Parking Facilities:</b> Parking garages and lots are available throughout the city.</p>
    <p><b>Public Transportation Maps:</b> Available at all subway stations and online.</p>
    <p><b>Navigating Unfamiliar Roads or Transportation Systems:</b> Use a GPS or map to help navigate.</p>
    
                
    </td>
        </tr>
        <tr>
                <td>
                <a href="../controller/logoutCheck.php"><button>Log out</button></a>
                </td>
            </tr>
        <tr>
            <td colspan="5" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
        </tr>
    </table>
</body>
</html>
