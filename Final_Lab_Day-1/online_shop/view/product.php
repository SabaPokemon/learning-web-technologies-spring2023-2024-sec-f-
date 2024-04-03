
<?php
require_once('../model/userModel.php');
if (!isset($_COOKIE['flag'])) {
    header('location: ../view/login.php');
}
session_start();
$username = $_SESSION['username'];
$products = getAllProduct();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Management</title>
</head>

<body>
    
        <table border="1" cellpadding="6" cellspacing="0" width="60%" align="center">
            <tr>
                <td>
                    <table border="0" align="center">
                        <tr>
                            <th colspan="8">
                                <h2 align="left">Product Management</h2>
                                Logged in as <?php echo $username ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="../controller/logoutCheck.php">Logout</a>&nbsp;&nbsp;
           
                                <h3>
                                </h3>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="8" align="center">
                                <h1>Products</h1>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                            <a href="../view/addProduct.php"><button>Add</button></a>
                            
                            <a href="../view/editProduct.php"><button>Edit</button></a>
                            </td>

                        </tr>
                        <tr>
                        <td>
                            <table border="1" cellpadding="6" cellspacing="0" width="60%" align="center">
                                <tr>
                                <td>No</td>
                                    <td>Product Name</td>
                                    <td>Quantity</td>
                                    <td>Price</td>
                                </tr>
                                <?php for ($i = 0; $i < count($products); $i++) {
                                ?>
                                    <tr>
                                        <td><?php echo $i + 1; ?></td>
                                        <td><?php echo $products[$i]['productName'];?></td>
                                        <td><?php echo $products[$i]['quantity']; ?></td>
                                        <td><?php echo $products[$i]['price']; ?></td>
                                        <td><a href="../controller/deleteProduct.php?deleteproductName=<?php echo $products[$i]['productName']; ?>"><button>Delete</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </td>

                        
            </tr>

        </table>
        </td>
        </tr>
        </table>
</body>

</html>