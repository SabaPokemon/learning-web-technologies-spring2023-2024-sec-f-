<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $error = "";

    if (empty($email)) {
        $error = "Email cannot be empty.";
    } 
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
        } else {
            $error = "Email is valid.";
        }
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
                <legend><b>EMAIL</b></legend>
                 <input style="width:200px; display: inline-block;" type="email" name="email">
            <button title="hint: example@gmail.com"><b>i</b></button>
                
                            

              <hr>
                            <input type="submit" name="submit" value="Submit" /><br><br>


            </fieldset>
        </form>
</body>
</html>
