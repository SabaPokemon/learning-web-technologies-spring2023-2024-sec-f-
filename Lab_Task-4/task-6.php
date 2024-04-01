<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    if (empty($_POST["bloodGroup"])) {
        $error = "Blood group is required";
    } else {
        $error = "Submission successful";
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
    <fieldset style="width:250px">        
        <legend><b>BLOOD GROUP</b></legend>
        <select name="">
                                <option value=""></option>
                                <option value="">A+</option>
                                <option value="">B+</option>
                                <option value="">AB+</option>
                                <option value="">0+</option>
                                <option value="">A-</option>
                                <option value="">B-</option>
                                <option value="">AB-</option>
                                <option value="">0-</option>
                                
                            </select>
       
            <hr>
          <input type="submit" name="submit" value="Submit" /><br><br>
    </fieldset>
    </form>
</body>

</html>
