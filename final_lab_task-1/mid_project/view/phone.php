<!DOCTYPE html>
<html>
<head>
    <title>phone notify</title>
</head>
<body>
    <form method="post" action="../controller/phoneCheck.php" enctype="">
        <table cellpadding="0" cellspacing="0" border="1" align="center" width="30%" height="40%">
            <tr><th align="center"><?php
            if(isset($_COOKIE['code']))
       {
        session_start();
        $random=rand(10,100);
        $_SESSION['random']=$random;
        echo "Code: {$random}";
       } ?> 
            </th></tr>
<tr>        
                    <th><?php
                        if (isset($_COOKIE['forgetpassword_message'])) {
                            $forgetpassword_message = $_COOKIE['forgetpassword_message'];
                                echo "<p>$forgetpassword_message</p>";
                                setcookie('forgetpassword_message', "", time()-300, '/');
                        }
                        ?>
                        </th></tr>
                        <tr>
                <td colspan="2" align="center"><br><input type="submit" name="ok" value="Ok" /><br><br> </td>
            </tr>
            </table>
            </form>
</body>
</html>