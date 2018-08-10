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
    $canLogin = false;
    $conn = mysqli_connect("localhost","root","", "jsmar34_djent") or die(mysql_error());

    $usrname = $_POST["username"];
    $pswd = $_POST["password"];

    $sql = "SELECT Password FROM `users` WHERE '$usrname' = Username AND '$pswd' = Password";
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
        setcookie('user', $usrname);
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $usrname;
        header("Location: index.php");
        die("Redirecting to default");

    } else {
        $canLogin = false;
        print("<br>Incorrect username or password");
        header("Location: wrongPass.php");
        die("Redirecting...");
    }


   ?>
  </body>

</html>
