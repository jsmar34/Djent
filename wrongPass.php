<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>
<!DOCTYPE html>
<html>

  <head>
      <title>Djent - Wrong Password</title>
    <audio controls autoplay>
        <source src="Howard.mp3" type="audio/mp3">
    </audio >
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="index.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

  <body>

    <!-- centering table -->
    <table id="back" width=100%>
      <tr>
        <th class="sitebuffer">Incorrect Username or Password</th>
      </tr>
      <tr>
        <th><img src="images/wrongPass.gif" alt="howard"></img></th>
      </tr><tr>
        <th><img src="images/Bill.gif" alt="howard"></img></th>
      </tr>
    </table>

  </body>

</html>
