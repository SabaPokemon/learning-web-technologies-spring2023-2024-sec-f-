<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OTP Verification </title>
    <link rel="stylesheet" href="../controller/styleForgetPass.css">
  </head>
  <body>
    <div class="center">
      <h1>OTP Verification</h1>
      <form method="post" action="../controller/otpVerificationCheck.php">
        
          <div class="txt_field">
            <input type="number" name="otp" required>
            <span></span>
            <label>Enter OTP</label>
          </div>
        <input type="submit" name="submit" value="Submit">
       
      </form>
    </div>
  </body>
</html>
