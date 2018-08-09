<?php session_start(); ?>
<!DOCTYPE html>
<html>

  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="profile.css">
  </head>

  <body>

    <!-- centering table -->
    <table id="back" width=100%>
      <tr>
        <td class="sitebuffer">Profile</td>
      </tr>
      <tr>
        <td>
          <!-- put profile information in php here -->
          <?php

          $conn = mysqli_connect("localhost","root","", "jsmar34_djent") or die(mysql_error());

          $sql = "SELECT * FROM users WHERE Username = $_SESSION[1]";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> Username: ". $row["Username"]. "  | " . " Email: ". $row["EmailAdress"]. "" .  "<br>";
            }
          }

          ?>
        </td>
      </tr>
      <!-- top nav bar -->
      <div class="sticky">
        <ul id="buttons">
          <li><a class="active" href="">Djent</a></li>
          <li><a href="forums.php">Forums</a></li>
          <li><a href="">Bands</a></li>
          <li><a href="">Help</a></li>
          <input type="text" id="search" placeholder="Search..">
          <li id="login"><a class="available" href="">Profile</a></li>
          <li id="login"><a class="available" href="SignOut.php">Sign Out</a></li>
        </ul>
        <br>
      </div>
      <br>
    </table>

  </body>

</html>
