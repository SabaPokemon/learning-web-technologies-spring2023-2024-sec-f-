<?php
    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
    }
   
?>
<html>
<head>
    <title>Add</title>
</head>
<body>
        <form method="post" action="../controller/addCheck.php" enctype="">
        <table border="1" align="center"><tr><td>
        <table border="0" align="center">
        <tr >
            <th colspan="5">
                <h2 align="left">SAN TOUR</h2>
            </th>
        </tr>
            
            <tr>
                <td>Name:</td>
                
            </tr>
            <tr>
                <td><input type="text" name="name" value="" /></td>
            </tr>
            <tr>
                <td>Email:</td>
            </tr>
            <tr>
                <td><input type="email" name="email" value="" /></td>
            </tr>
            <tr>
                <td>Position: </td>
                
            </tr>
            <tr>
                <td><input type="text" name="role" value="" /> </td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="cancel" value="Cancel" /><br><br> </td>
            </tr>
           
            <tr>
                <td colspan="2" align="center"><input type="submit" name="add" value="Add" /><br><br> </td>
            </tr>
            <tr>
            <td colspan="5" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
            </tr>
        </table>
</td></tr></table>
        </form>
</body>
</html>