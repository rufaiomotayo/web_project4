<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="signup_login.css">
  </head>
  <body>
    <h1>Welcome to the Jeopardy!</h1>
    
    <div class="enter">
      <form class="" action="signup_submit.php" method="post">
        <div class="enter_input">
          <p>Sign up to enter the game</p>
          <div class="input_box">
            <input type="text" name="username" placeholder="Username"><br>
          </div>
          <div class="input_box">
            <input type="text" name="password" placeholder="Password"><br>
          </div>
        </div>
        <input type="submit" name="GO">
      </form>
    </div>
    <p>Already an user? <br>
      <a href="login.php">Login</a>
    </p>
  </body>
</html>
