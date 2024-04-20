<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
        
    }
    session_start();
    $username=$_SESSION['username'];
    $position=getPosition($username);

?>
<?php if($position=="user"){ ?>
<html>
    <head>
        <title>User dashboard</title>
        <link rel="stylesheet" href="../controller/styleDashboard.css">
    </head>
    <body>
        <header>
            <div class="nav">
                <h2 class="logo"><span>S</span>an and <span>To</span>ur</h2>
                <h3 class="logo">Logged in as <?php echo $username ?></h3>
                <a href="../view/notification.php"  ><img src="../img/bell.png" class="icon"></a>
                <a href="../controller/logoutCheck.php" class="btn">Log out</a>
            </div>
            <div class="main">
                <div class="text">
                    <h1>Website</h1>
                    <p>Explore the world with us</p>
                    <div class="active">
                        <a href="../view/reservation.php" class="btnone">Reserve Now!</a>
                        <a href="../view/wishlist.php" class="btntwo">Wish List</a>
                        <a href="../view/tourCalendar.php" class="btnone">Tour Calendar</a>
                        <a href="../view/about.php" class="btntwo">About</a>
                    </div>
                    
                </div>
            </div>
            
            <div class="ht">
                 <h3>Copyright © 2024. SAN Tour. All rights reserved</h3>
            </div>
        </header>
    </body>
</html>
<?php }elseif($position=="admin"){ ?>
    <html>
    <head>
        <title>Admin dashboard</title>
        <link rel="stylesheet" href="../controller/styleDashboard.css">
    </head>
    <body>
        <header>
            <div class="nav">
                <h2 class="logo"><span>S</span>an and <span>To</span>ur</h2>
                <h3 class="logo">Logged in as <?php echo $username ?></h3>
                <a href="../view/notification.php"  ><img src="../img/bell.png" class="icon"></a>
                <a href="../controller/logoutCheck.php" class="btn">Log out</a>
            </div>
            <div class="main">
                <div class="text">
                    <h1>Website</h1>
                    <p>Explore the world with us</p>
                    <div class="active">
                        <a href="../view/management.php" class="btnone">User Management</a>
                        <a href="../view/bookinglist.php" class="btntwo">Booking Management</a>
                        <a href="../view/about.php" class="btnone">About</a>
                    </div>
                </div>
            </div>
            <div class="ht">
                 <h3>Copyright © 2024. SAN Tour. All rights reserved</h3>
            </div>
           
        </header>
    </body>
</html>
    <?php }else{ ?>
        <html>
    <head>
        <title>Host dashboard</title>
        <link rel="stylesheet" href="../controller/styleDashboard.css">
    </head>
    <body>
        <header>
            <div class="nav">
                <h2 class="logo"><span>S</span>an and <span>To</span>ur</h2>
                <h3 class="logo">Logged in as <?php echo $username ?></h3>
                <a href="../view/notification.php"  ><img src="../img/bell.png" class="icon"></a>
                <a href="../controller/logoutCheck.php" class="btn">Log out</a>
            </div>
            <div class="main">
                <div class="text">
                    <h1>Website</h1>
                    <p>Explore the world with us</p>
                    <div class="active">
                        <a href="../view/wishlist.php" class="btnone">Wish List</a>
                        <a href="../view/availabilityCalendar.php" class="btntwo">Availability Calendar</a>
                        <a href="../view/aboutus.php" class="btnone">About</a>
                    </div>
                </div>
            </div>
            <div class="ht">
                 <h3>Copyright © 2024. SAN Tour. All rights reserved</h3>
            </div>
        </header>
    </body>
</html>
<?php } ?>