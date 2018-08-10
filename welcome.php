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

    $conn = mysqli_connect("localhost","root","", "jsmar34_djent") or die(mysql_error());
    //mysqli_select_db("jsmar34_djent") or die(mysql_error());

    $usrImg = $_POST["image"];
    $usrname = $_POST["username"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $cpswd = $_POST["confirmPassword"];
    if ($pswd == $cpswd) {
      echo("Welcome to the site " . $usrname . "\n");
      $sql = "INSERT into users (Username, Password, EmailAdress, OnlineStatus, UserImage) VALUES ($usrname, $pswd, $email, 1, $usrImg)";
        if ($conn->query($sql) === TRUE) {
            echo "<p onclick= \"location.href='Input.php'\">New record created successfully</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } else {
      die("Passwords do not match" . "\n");
    }


   ?>
  </body>

</html>
