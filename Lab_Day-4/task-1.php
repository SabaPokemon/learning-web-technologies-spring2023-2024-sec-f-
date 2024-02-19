<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $error = "";

    if (empty($name)) {
        $error = "Name cannot be empty.";
    } 
    elseif (!preg_match("/^[a-zA-Z][a-zA-Z .-]*$/", $name)) {
        $error = "Invalid name format.";
    } 
    elseif (str_word_count($name) < 2) {
        $error = "Name must contain at least two words.";
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset style="width:310px">
        <legend><b>NAME</b></legend>
                <input type="text" name="username" value="" /> <br>
              <hr>
         <input type="submit" name="submit" value="Submit" /><br><br>
        </fieldset>
    </form>x
</body>

</html>