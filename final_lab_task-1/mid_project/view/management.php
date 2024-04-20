<?php
require_once('../model/userModel.php');
if (!isset($_COOKIE['flag'])) {
    header('location: ../view/login.php');
}
session_start();
$username = $_SESSION['username'];
$users = getAllUser();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Management</title>
    <link rel="stylesheet" href="../controller/styleAbout.css">
    <style>
        span{
    color: #fabd02;
}
        </style>
</head>

<body>

    
        <table border="1" cellpadding="6" cellspacing="0" width="60%" align="center">
            <tr>
                <td>
                    <table border="0" align="center">
                        <tr>
                            <th colspan="8">
                                <h2 align="left">SAN <span> TOUR</span></h2>
                                <h3>
                                    <a href="home.php" class="bt">Home</a>&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    Logged in as<span <?php echo $username ?></h3>
                                </h3>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="8" align="center">
                                <h1>Users</h1>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                            <a href="../view/add.php" class="btn">Add</a>
                            </td>
                        </tr>
                        <td>
                            <table border="1" cellpadding="6" cellspacing="0" width="60%" align="center">
                                <tr>
                                    <td>No</td>
                                    <td>User Name</td>
                                    <td>Email</td>
                                    <td>Position</td>
                                    <td>Operation</td>
                                </tr>
                                <?php for ($i = 0; $i < count($users); $i++) {
                                ?>
                                    <tr>
                                        <td><?php echo $i + 1; ?></td>
                                        <td><?php echo $users[$i]['username'];?></td>
                                        <td><?php echo $users[$i]['email']; ?></td>
                                        <td><?php echo $users[$i]['position']; ?></td>
                                        <td><a href="../controller/delete.php?deleteusername=<?php echo $users[$i]['username']; ?>" class="btn">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </td>
            </tr>

            <tr>
                <td>
                    <a href="../controller/logoutCheck.php" class="btn">Log out</a>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
</body>

</html>