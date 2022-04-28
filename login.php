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
    <h1>Login to start the Jeopardy!</h1>
    <div class="enter">
      <form class="" action="login_submit.php" method="post">
        <div class="enter_input">
          <div class="input_box">
            <input type="text" name="login_username" placeholder="Username"><br>
          </div>
          <div class="input_box">
            <input type="text" name="login_password" placeholder="Password"><br>
          </div>
        </div>
        <input type="submit" name="GO">
      </form>
    </div>
    <p>Haven't signed up? <br>
      <a href="signup.php">Signup</a>
    </p>
  </body>
</html>
