
<?php

?>
  <!DOCTYPE HTML>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
  </head>

  <body>

  <?php
    session_start();
    $canLogin = false;

    $conn = mysqli_connect("localhost","root","", "jsmar34_djent") or die(mysql_error());

    $usrname = $_POST["username"];
    $pswd = $_POST["password"];

    $sql = "SELECT Password FROM `users` WHERE '$usrname' = Username";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      if($row = mysqli_fetch_row($result))
        {
            if($pswd == $row[0]);
            {
                $canLogin = true;
            }
        }
    }

    if($canLogin)
    {
        setcookie('user', md5($usrname));
        header("Location: index.php");
        die("Redirecting to default");
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $usrname;

    } else {
        $canLogin = false;
        print("<br>Incorrect username or password");
    }


   ?>
  </body>

</html>
