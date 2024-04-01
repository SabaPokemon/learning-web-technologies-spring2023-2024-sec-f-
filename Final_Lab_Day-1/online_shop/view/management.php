
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
    <title>User Management</title>
</head>

<body>

    
        <table border="1" cellpadding="6" cellspacing="0" width="60%" align="center">
            <tr>
                <td>
                    <table border="0" align="center">
                        <tr>
                            <th colspan="8">
                                <h2 align="left">Employee Management</h2>
                                Logged in as <?php echo $username ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="../controller/logoutCheck.php">Logout</a>&nbsp;&nbsp;
           
                                <h3>
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
                            <a href="../view/add.php"><button>Add</button></a>
                            
                            <a href="../view/update.php"><button>Update</button></a>
                            </td>
                            <td>
                                <input type="text" name="search" ><a href="../view/search.php"><button>Search</button></a>
                            </td>

                        </tr>
                        <td>
                            <table border="1" cellpadding="6" cellspacing="0" width="60%" align="center">
                                <tr>
                                <td>No</td>
                                    <td>Name</td>
                                    <td>Contact</td>
                                    <td>User Name</td>
                                    <td>Password</td>
                                </tr>
                                <?php for ($i = 0; $i < count($users); $i++) {
                                ?>
                                    <tr>
                                        <td><?php echo $i + 1; ?></td>
                                        <td><?php echo $users[$i]['name'];?></td>
                                        <td><?php echo $users[$i]['contact']; ?></td>
                                        <td><?php echo $users[$i]['username']; ?></td>
                                        <td><?php echo $users[$i]['password']; ?></td>
                                        <td><a href="../controller/delete.php?deleteusername=<?php echo $users[$i]['username']; ?>"><button>Delete</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
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
        </td>
        </tr>
        </table>
</body>

</html>