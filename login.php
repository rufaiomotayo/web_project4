<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="signup_login.css">
  </head>
  <body>
    <h1>Welcome to GameStore</h1>
    <div class="enter">
    <p><b>Log In</b></p>
      <form class="" action="login_submit.php" method="post">
        <div class="enter_input">
          <div class="input_box">
            <input type="text" name="login_username" placeholder="Username"><br>
          </div>
          <div class="input_box">
            <input type="password" name="login_password" placeholder="Password"><br>
          </div>
        </div>
        <label for="trade" style="color:#f9c495;">Choose to Buy or Sell:</label>
        <select name="buy_sell" id="trade" multiple>
          <option name="buy" value="Buying">Buying</option>
          <option name="sell" value="Selling">Selling</option>
        </select>
        <br><br>
        <input class="submit" type="submit" name="GO">
      </form>
      <br><br>
    </div>
    <br>
    <p>
      <a href="signup.php">Don't have an account? </a>
    </p>
  </body>
</html>
