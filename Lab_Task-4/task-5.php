<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDegrees = 0;
    $degrees = ['SSC', 'HSC', 'BSc', 'MSc'];
    $error = "";

    foreach ($degrees as $degree) {
        if (isset($_POST[$degree])) {
            $selectedDegrees++;
        }
    }

    if ($selectedDegrees < 2) {
        $error = "You must select at least two degrees.";
    } else {
        $error = "Form submitted successfully.";
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
        <legend><b>DEGREE</b></legend>
                

                <input type="checkbox" name="check[]" value="" />SSC
                           <input type="checkbox" name="check[]" value="" />HSC
                           <input type="checkbox" name="check[]" value="" />BSc 
                           <input type="checkbox" name="check[]" value="" />MSc
                           <hr>
                <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>
