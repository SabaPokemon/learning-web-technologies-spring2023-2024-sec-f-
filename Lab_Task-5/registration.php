<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0" width="80%" align="center">
        <tr>
            <th colspan="3">
                <div>
                    <h1 align="left" style="display: inline; float: left;">xCompany</h1>
                    <div align="right" style="display: inline; float: right;">
                        <a href="#">Home</a> |
                        <a href="#">Login</a> |
                        <a href="#">Registration</a>
                    </div>
                </div>

            </th>
        </tr>
        <tr rowspan="10">
            <td>
                <form method="post" action="reg.php" enctype="">
                    <fieldset>
                        <legend>
                            Registration
                        </legend>
                        <table border="0">
                            <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name="fullname" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <input type="text" name="email" required>
                                    &nbsp; <button title="hint: example@gmail.com">i</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Username:
                                </td>
                                <td>
                                    <input type="text" name="username" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password:
                                </td>
                                <td>
                                    <input type="password" name="password" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Password:
                                </td>
                                <td>
                                    <input type="password" name="cpassword" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Gender
                                </td>
                                <td>
                                    <input type="radio" name="gender"> Male
                                    <input type="radio" name="gender"> Female
                                    <input type="radio" name="gender"> Other
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Date of Birth
                                </td>
                                <td>
                                    <input type="text" name="dob" size="1px" value=""> /
            <input type="text" name="dob" size="1px" value=""> /
            <input type="text" name="dob" size="1px" value="">
                                   <i>(dd/mm/yyyy)</i>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3" align="left">
                                    <input type="submit" name="" value="Submit" />
                                    &nbsp;
                                    <input type="reset" name="" value="Reset" />
                                </th>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" height="50px">Copyright © 2017</td>
        </tr>
    </table>
</body>

</html>
