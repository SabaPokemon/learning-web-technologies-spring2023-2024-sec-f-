<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup Form </title>
    <link rel="stylesheet" href="../controller/styleSignup.css">
  </head>
  <body>
    <div class="center">
      <h1>Signup</h1>
      <form method="post" action="../controller/signupCheck.php">
        <div class="txt_field">
          <input type="text" name="fusername" required>
          <span></span>
          <label>First Name</label>
        </div>
        <div class="txt_field">
            <input type="text" name="lusername" required>
            <span></span>
            <label>Last Name</label>
          </div>
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
        <div class="txt_field">
            <input type="password" name="re-password" required>
            <span></span>
            <label>Confirm Password</label>
          </div>
        <div class="pass">
            <label><input type="checkbox" name="check"> I have the read</label>
            <a href="../view/term.php">Terms & Conditions</a>
        </div>
        <input type="submit" name="submit" value="Sign up">
        <div class="login_link">
          Already have an account?Click here to <a href="../view/login.php">Log in</a>
        </div>
      </form>
    </div>
  </body>
</html>
