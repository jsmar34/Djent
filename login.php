  <!DOCTYPE HTML>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="loginStyle.css">
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
          <td><input type="text" name="username" autocomplete="off"></td>
      </tr>
      <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
          <td><button type="submit" class="button">Login</td>
      </tr>
  </form>
  </table>
</body>

</html>
