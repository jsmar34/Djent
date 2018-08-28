<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>
  <!DOCTYPE HTML>
<html>
<head>
  <title>Djent - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="loginStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <table>
    <tr>
      <th>Login</th>
      <th></th>
    </tr>
    <form action='LoggedIn.php' method="post">
      <tr>
          <td>Username</td>
          <td><input type="text" name="username" autocomplete="off" required></td>
      </tr>
      <tr>
          <td>Password</td>
          <td><input type="password" name="password" required></td>
          <td><button type="submit" class="button">Login</td>
      </tr>
  </form>

  </table>

    <center><button class="button"><a href="SignUp.php">Sign Up</a></button></center>
</body>

</html>
