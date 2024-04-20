<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change Password </title>
    <link rel="stylesheet" href="../controller/styleForgetPass.css">
  </head>
  <body>
    <div class="center">
      <h1>Change Password</h1>
      <form method="post" action="../controller/passCheck.php">
        
          <div class="txt_field">
            <input type="password" name="newpassword" required>
            <span></span>
            <label>New Password:</label>
          </div>
          <div class="txt_field">
            <input type="password" name="rnewpassword" required>
            <span></span>
            <label>Retype New Password:</label>
          </div>
        <input type="submit" name="Submit" value="Submit">
       
      </form>
    </div>
  </body>
</html>
