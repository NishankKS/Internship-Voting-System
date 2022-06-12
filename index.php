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
    <form>
      <input type="text" id="login" class="fadeIn second" name="phone" placeholder="mobile number" required>
      <input type="button" id="sendOTP" onclick="change()" class="fadeIn fourth" name="login" value="send OTP" />
      <input type="text" id="password" class="fadeIn third" style="visibility:hidden" name="login" placeholder="otp">
      <input type="submit" id="log" style="visibility:hidden" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
  <script>
      function change()
      {
        document.getElementById("password").style.visibility="visible";
        document.getElementById("log").style.visibility="visible";
      }
  </script>
  </body>
</html>