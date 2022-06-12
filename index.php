<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>login page</title>
  </head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
  <a href="signup.php"><h2 class="inactive underlineHover">Register To Vote </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.youngartiste.com/assets/img/young-artiste-logo-white.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="otp.php" method="POST">
      <input type="text" id="country" class="fadeIn second" name="phone" placeholder="mobile number" required>
      <!-- <input type="submit" id="sendOTP" class="fadeIn fourth" name="login" value="send OTP" /> -->
      
      <input type="submit" id="log" class="fadeIn fourth" value="Send OTP">
    </form>
    
    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>
  
  </body>
</html>