<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0" width="80%" align="center">
        <tr>
            <th colspan="3">
                <div>
                    <h1 align="left" style="display: inline; float: left;">xCompany</h1>
                    <div align="right" style="display: inline; float: right;">
                        <span>Logged in as Bob | </span>
                        <a href="#">Logout</a>
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
                <fieldset>
                    <legend>
                        PROFILE PICTURE
                    </legend>
                    <table border="0">
                        <tr>
                            <td>
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" height="160px" width="150px">
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <form method="POST" action="fileupload.php" enctype="multipart/form-data">
                                    <input type="file" name="myfile" value="" />
                                    <hr>
                                    <input type="submit" name="Submit" value="Submit"/>
                                </form>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
        </tr>
            <td colspan="3" align="center" height="50px">Copyright © 2017</td>
        </tr>
    </table>
</body>
</html>