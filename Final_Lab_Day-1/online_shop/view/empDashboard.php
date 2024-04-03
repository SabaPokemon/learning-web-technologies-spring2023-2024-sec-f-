<?php

    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
    }
    session_start();
    $username=$_SESSION['username'];

?>
<html>
<head>
    <title>Admin Dashdoard</title>
</head>
<body>
    <table border="1" cellpadding="6" cellspacing="0" width="60%" align="center">
    <tr>
            <th colspan="3">
                <h2 align="left"> Employee</h2>
                
                Logged in as <?php echo $username ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="../controller/logoutCheck.php">Logout</a>&nbsp;&nbsp;
            </th>
        </tr>
        <tr>
           <td>
           <a href="product.php"><button>Product List</button><br><br></a>
</td>
        </tr>



    </table>
    
</body>
</html>
