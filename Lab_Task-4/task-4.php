<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    if (empty($_POST["gender"])) {
        $error = "Gender is required";
    } else {
        $gender = $_POST["gender"];
        $error = "Gender selected: $gender";
    }

    if ($error) {
        echo "<script>alert('$error');</script>";
    } else {
        echo "<script>alert('Form submitted successfully!');</script>";
    }
}
?>

<html>
<body>
<form noValidate=true method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:310px">
        <legend><b>GENDER</b></legend>
                		     <input type="radio" name="gender" value="" />Male
                             <input type="radio" name="gender" value="" />Female
                             <input type="radio" name="gender" value="" />Other
                             <hr>
                              <input type="submit" name="submit" value="Submit" />
                              
                             <br><br>
        </fieldset>        
    </form>
</body>
</html>
