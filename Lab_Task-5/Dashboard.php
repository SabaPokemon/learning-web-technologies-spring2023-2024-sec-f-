<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <table border="1" cellpadding="5" cellspacing="0" width="80%" align="center">
            <tr>
                <th colspan="3">
                    <div>
                        <h1 align="left" style="display: inline; float: left;">xCompany</h1>
                        <div align="right" style="display: inline; float: right;">
                            <span>Logged in as <?= echo $username ?> | </span>
                            <a href="login.php">Logout</a>
                        </div>
                    </div>
                    
                </th>
            </tr>
            <tr>
                <td>
                    <h3>
                        Account
                    </h3>
                    <hr>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">View Profile</a></li>
                        <li><a href="">Edit Profile</a></li>
                        <li><a href="">Change Profile Picture</a></li>
                        <li><a href="">Change Password</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </td>
                <td colspan="2">
                    <h1>
                        Welcome Bob!
                    </h1>
                    <br><br><br><br><br>
                </td>
            </tr>
            </tr>
                <td colspan="3" align="center" height="50px">Copyright © 2017</td>
            </tr>
        </table>
    </body>
    </html>
