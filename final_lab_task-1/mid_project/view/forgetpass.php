<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Password </title>
    <link rel="stylesheet" href="../controller/styleForgetPass.css">
  </head>
  <body>
    <div class="center">
      <h1>Reset Password</h1>
      <form method="post" action="../controller/forgetpassCheck.php">
        
          <div class="txt_field">
            <input type="text" name="email" required>
            <span></span>
            <label>Email</label>
          </div>
        <input type="submit" name="submit" value="Send OTP">
       
      </form>
    </div>
  </body>
</html>
