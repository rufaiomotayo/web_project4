<?php
session_start();
$loginUsername = $_POST["login_username"];
$loginPassword = $_POST["login_password"];
$buyORsell = $_POST["buy_sell"];
if($loginUsername == $_COOKIE["username"] && $loginPassword == $_COOKIE["password"]){
  if($buyORsell == Buying){
    header("location: buyerportal.php");
  }
  if($buyORsell == Selling){
    header("location: sellerportal.php");
  }
?>
<!-- <a href="logout.php">logout</a> -->
<?php
}else{
?>
<p>User not found, try login again <br>
  <a href="login.php">Login</a>
</p>
<?php
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="signup_login.css">
  </head>
  <body>

  </body>
</html>
