<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>
  <!DOCTYPE HTML>
<html>

  <head>
      <title>Djent - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
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
    $dateJoin = date("Y-m-d");
    $lastOnline = date("Y-m-d-h-i-s");
    if ($pswd == $cpswd) {
      $sql = "INSERT INTO users (Username, Password, EmailAdress, OnlineStatus, UserImage, Joined, LastOnline) VALUES ('$usrname', '$pswd', '$email', 1, '$usrImg', '$dateJoin', '$lastOnline')";
        if ($conn->query($sql) === TRUE) {
            setcookie('user', $usrname);
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usrname;
            header("Location: index.php");
            sleep(5);
            die("Redirecting to default");
        } else {
            echo ("Error: " . $sql . "<br>" . $conn->error);
        }

    } else {
      die("Passwords do not match" . "\n");
    }


   ?>
  </body>

</html>
