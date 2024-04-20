<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="../controller/styleLogin.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="../controller/loginCheck.php">
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">
            <label><input type="checkbox" name="check"> Remember Me</label>
            <a href="../view/forgetpass.php">Forgot Password?</a>
        </div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Don't have an account? <a href="../view/signup.php">Signup</a>
        </div>
      </form>
    </div>
  </body>
</html>
