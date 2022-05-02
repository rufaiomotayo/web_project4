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
    <h1>Welcome to the Site!</h1>
    
    <div class="enter">
      <form class="" action="signup_submit.php" method="post">
        <div class="enter_input">
          <p>Sign Up</p>
          <div class="input_box">
            <input type="text" name="username" placeholder="Username"><br>
          </div>
          <div class="input_box">
            <input type="password" name="password" placeholder="Password"><br>
          </div>
        </div>
        <input  class="submit" type="submit" name="GO">
      </form>
      <br><br>
    </div>
    <br>
    <p>
      <a href="login.php">Already an user?</a>
    </p>
  </body>
</html>
