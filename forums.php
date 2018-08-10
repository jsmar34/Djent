<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>
<!DOCTYPE html>
<html>

  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="index.css">
  </head>

  <body>

    <!-- centering table -->
    <table id="back" width=100%>
      <tr>
        <th class="sitebuffer">FORUMS</th>
      </tr>
      <tr>
        <td>FORUM LIST</td>
        <tr>
          <ul id"forumList">
            <td><li>one</li></td>
          </ul>
        </tr>
      </tr>
      <!-- top nav bar -->
      <div class="sticky">
        <ul id="buttons">
          <li><a href="index.php">Djent</a></li>
          <li><a class="active" href="">Forums</a></li>
          <li><a href="">Bands</a></li>
          <li><a href="">Help</a></li>
          <input type="text" id="search" placeholder="Search..">
          <li id="login"><a class="available" href="login.php">Log In</a></li>
          <li id="login"><a class="available" href="SignUp.php">Sign Up</a></li>
        </ul>
        <br>
      </div>
      <br>
    </table>

  </body>

</html>
