<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>
<!DOCTYPE HTML>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
  </head>

  <body>

  <?php
    session_unset();
    session_destroy();
    setcookie("user", "", time() - 3600);

    $conn = mysqli_connect("localhost","root","", "jsmar34_djent") or die(mysql_error());

    header("Location: login.php");




   ?>
  </body>

</html>
