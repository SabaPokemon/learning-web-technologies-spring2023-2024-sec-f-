<?php

    if(!isset($_COOKIE['flag'])){
        header('location: ../view/login.php');
    }

?>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
        <form method="post" action="../controller/editProductCheck.php" enctype="">
        <table border="1" align="center"><tr><td>
        <table border="0" align="center">
        <tr >
            <th colspan="5">
                <h2 align="left">New Product</h2>
            </th>
        </tr>
            
            <tr>
                <td>Product Name:</td>
                
            </tr>
            <tr>
                <td><input type="text" name="pname" value="" /></td>
            </tr>
            <tr>
                <td>Quantity:</td>
            </tr>
            <tr>
                <td><input type="number" name="quantity" value="" /></td>
            </tr>
            <tr>
                <td>Price: </td>
                
            </tr>
            <tr>
                <td><input type="number" name="price" value="" /> </td>
            </tr>

            <tr>
                <td  align="center"><input type="submit" name="cancel" value="Cancel" />
           
                <input type="submit" name="add" value="Edit" /><br><br> </td>
            </tr>
        </table>
</td></tr></table>
        </form>
</body>
</html>
