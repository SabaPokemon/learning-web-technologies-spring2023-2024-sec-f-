<html>

<head>
    <title>HTML form</title>
</head>

<body>
    <table border="0" width="100%">
        <tr>
            <th>
                <h2 align="left">Yahoo</h2>
                <h3 align="right">help</h3>
            </th>
        </tr>
        <tr rowspan="10">
            <td>
                <table border="1" cellpadding="5" cellspacing="0" width="30%" align="center">
                    <tr>
                        <td>
                            <table border="0" width="80%">
                                <form action="../controller/registrationFormCheck.php" method="post">
                                    <tr align="center">
                                        <th colspan>yahoo</th>
                                    </tr>
                                    <tr align="center">
                                        <th>Create a yahoo account</th>

                                    </tr>

                                    <tr>
                                        <td>
                                            First Name:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="fname" required>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Last Name:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="lname" required>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date of Birth
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <label for="day">Day:</label>
                                            <select name="day" id="day">
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>

                                            <label for="month">Month:</label>
                                            <select name="month" id="month">
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <label for="year">Year:</label>
                                            <select name="year" id="year">
                                                <!-- 100 years -->
                                                <script>
                                                    var currentYear = new Date().getFullYear();
                                                    for (var i = 2016; i >= 1900; i--) {
                                                        document.write('<option value="' + i + '">' + i + '</option>');
                                                    }
                                                </script>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Gender
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="gender" value="male" required> Male
                                            <input type="radio" name="gender" value="female" required> Female
                                            <input type="radio" name="gender" value="other" required> Other
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Phone:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="phone" required>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Emailid:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="email" placeholder="example@gmail.com" required>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Password:
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="password" name="password" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Confirm Password:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="password" name="cpassword" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>


                                    <tr>
                                        <th align="left">
                                            <input type="submit" name="submit" value="Continue" />
                                            &nbsp;

                                        </th>
                                    </tr>

                                </form>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>