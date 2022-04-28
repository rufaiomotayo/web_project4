<?php
session_start();

if(isset($_POST["username"]) && !empty($_POST["password"])){
  $_cookie_username = $_POST["username"];
  $_cookie_password = $_POST["password"];
  $_SESSION["username"] = $_cookie_username;
  $_SESSION["password"] = $_cookie_password;
  setcookie("username",$_cookie_username,time()+3600*24*7);
  setcookie("password",$_cookie_password,time()+3600*24*7);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="signup_login.css">
  </head>
  <body>

    <?php
    if (empty($_POST["password"]) || !isset($_POST["password"])) {
    ?>
    <p>Password is invalid <br>
      <a href="signup.php">Signup</a>
    </p>
    <?php
    }elseif(empty($_cookie_username) || !isset($_POST["username"])){
    ?>
    <p>Username is invalid <br>
      <a href="signup.php">Signup</a>
    </p>
    <?php
    }else{
    ?>
    <h2>Congrats! You have signed up successfully!</h2>
    <p>Login to play JEOPARDY!!! <br>
    <a href="login.php">Login</a>
    </p>
    <?php
    }
    ?>
  </body>
</html>
