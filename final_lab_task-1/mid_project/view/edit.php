<?php
    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
    }
   
?>
<html>
<head>
    <title>Log in Page</title>
</head>
<body>
        <form method="post" action="../controller/editCheck.php" enctype="multipart/form-data">
        <table border="1" align="center"><tr><td>
        <table border="0" align="center">
        <tr >
            <th colspan="2">
                <h2 align="left">SAN TOUR</h2>
                
            </th>
        </tr>        
            <tr>
                <td>General Information:</td>
            </tr>
            <tr>
                <td><input type="text" name="info" value="" /></td>
            </tr>
            <tr>
                <td>Location: </td>
                
            </tr>
            <tr>
                <td><input type="text" name="local" value="" /> </td>
            </tr>
            <tr>
                <td>How to Reach: </td>
            </tr>
            <tr>
                <td><input type="text" name="reach" value="" /> </td>
            </tr>
            <tr>
                <td>Image: </td>
            </tr>
            <tr>
                <td><input type="file" name="myfile" value="" /> <br></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="cancel" value="Cancel" /><br><br> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br><input type="submit" name="update" value="Update" /><br><br> </td>
            </tr>
            <tr>
            <td colspan="2" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
            </tr>
        </table>
</td></tr></table>
        </form>
</body>
</html>