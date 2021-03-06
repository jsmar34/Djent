<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>
  <!DOCTYPE HTML>
<html>

<head>
    <title>Djent - Sign Up!</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="loginStyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<table>
  <tr>
    <th>Sign Up</th>
    <th></th>
  </tr>
  <div class="container">
    <form name="signup" method="post" action="welcome.php">
      <tr>
        <tr>
          <td>
            <img src="images/defaultProfile.jpg" id="image" width="100" height="100">
          </td>
        </tr>
          <td>Profile Picture</td>
          <td><input type="file" id="customImage" name="image" accept="image/*"></td>
      </tr>
      <tr>
          <td>Username</td>
          <td><input type="text" name="username" autocomplete="off" required></td>
      </tr>
      <tr>
          <td>Email</td>
          <td><input type="email" name="email" autocomplete="off" required></td>
      </tr>
      <tr>
          <td>Password</td>
          <td><input type="password" name="password" required></td>
      </tr>
      <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="confirmPassword" required></td>
          <td><button type="submit" class="button" id="signUp">Sign Up</button></td>
      </tr>
    </form>
  </div>
</table>

</body>

</html>
