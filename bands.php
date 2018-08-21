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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

  <body>

    <!-- centering table -->
    <table id="back" width=100%>
      <tr>
        <th class="sitebuffer">Bands</th>
      </tr>
      <tr>
        <td>
          <table id="table" width=100%>
            <link rel="stylesheet" type="text/css" href="bands">
            <tr>
                <td id='table'>Band Name</td>
                <td id='table'>Number of Albums</td>
                <td id='table'>Year Founded</td>
            </tr>
            <?php

              $conn = mysqli_connect("localhost","root","", "jsmar34_djent") or die(mysql_error());

              //query for band info
              $sql = "SELECT * FROM bands";

              $result = $conn->query($sql) or die($conn->error);


                while($row = $result->fetch_assoc()) {
                    echo("<tr> <td id='table' >" . $row["BandName"] . "</td>" . "<td id='table' >" . $row["NumberOfAlbums"] . "</td>" . "<td id='table'>" . $row["DateFounded"] . "</td>" . "</tr>");
                }

            ?>
        </table>
        </td>
      </tr>
      <!-- top nav bar -->
      <div class="sticky">
        <ul id="buttons">
          <li><a href="index.php">Djent</a></li>
          <li><a href="forums.php">Forums</a></li>
          <li><a class="active" href="bands.php">Bands</a></li>
          <li><a href="">Help</a></li>
          <input type="text" id="search" placeholder="Search..">
          <li id="login"><a class="available" href="Profile.php">Profile</a></li>
          <li id="login"><a class="available" href="SignOut.php">Sign Out</a></li>
        </ul>
        <br>
      </div>
      <br>
    </table>

  </body>

</html>
